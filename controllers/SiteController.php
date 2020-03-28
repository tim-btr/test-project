<?php

namespace app\controllers;

use app\models\User;
use yii\data\Pagination;
use app\models\Post2tag;
use app\models\Posts;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    
        $query = Posts::find();
        $countQuery = clone $query;
        
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
        $posts = $query->offset($pages->offset)
                        ->limit($pages->limit)
                        ->all();
    
        return $this->render('index', [
            'posts' => $posts,
            'pages' => $pages,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        
        //Do login and auto-register
        if(Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            
            //if user not found then register and login
            if(null == $model->getUser()) {
                $model->register();
                $model->login();
                return $this->refresh();
            }
            
            //if user found then login
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            }
        }
        
        return $this->render('/site/login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /**
     * @param $id
     * @return string
     */
    public function actionArticle($id)
    {
        $post = Posts::findOne($id);
        return $this->render('article', ['post' => $post]);
    }
    
    /**
     * @param $id
     * @return string
     */
    public function actionCategories($id)
    {
        $query = Posts::find()->where(['category_id' => $id]);
        $countQuery = clone $query;
    
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $posts = $query->offset($pages->offset)
                        ->limit($pages->limit)
                        ->all();
        
        return $this->render('categories', [
            'posts' => $posts,
            'pages' => $pages
        ]);
    }
    
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionUsers()
    {
        $users = User::find()->all();
        
        //Fill the balance
        if(Yii::$app->request->post()) {
            $id = Yii::$app->user->identity->getId();
            $user = User::find()->where(['id' => $id])->one();
            $user->balance += $_POST['sum']*100;
            $user->save(false);
            return $this->refresh();
        }
        
        return $this->render('users', [
            'users' => $users
        ]);
    }
    
    /**
     * @return string|Response
     * @throws Exception
     */
    public function actionTransaction()
    {
        $users = User::find()->all();
        
        if(Yii::$app->request->post()) {
            $to = Yii::$app->request->post();
            $from = Yii::$app->user->identity->getId();
    
            $fromName = Yii::$app->db->createCommand('SELECT `name` FROM `user` WHERE `id` = '.(int)$from)->queryOne();
            $outBalance = Yii::$app->db->createCommand('SELECT `balance` FROM `user` WHERE `id` = '.(int)$from)->queryOne();
            $inBalance = Yii::$app->db->createCommand('SELECT `balance` FROM `user` WHERE `name` = "'.$to['to'].'"')->queryOne();
    
            
            $transaction = Yii::$app->db->beginTransaction();
            try{
                //Stop trans. if balance is too low
                if(($outBalance['balance']/100) - $to['sum'] < -1000) {
                    throw new Exception('Low balance');
                }
    
                //Output user's money
                Yii::$app->db->createCommand("
                    UPDATE `user` SET `balance` =
                    ".(int)(($outBalance['balance']) - $to['sum']*100)."
                    WHERE `id` = ".(int)$from
                )->execute();
                
                //Input money to destination
                Yii::$app->db->createCommand("
                    UPDATE `user` SET `balance` =
                    ".(int)(($inBalance['balance']) + $to['sum']*100)."
                    WHERE `name` = '".$to['to']."'
                ")->execute();
                
                //Log the transaction
                Yii::$app->db->createCommand("
                    INSERT INTO `transaction_log`
                    SET
                    `from` = '".$fromName['name']."',
                    `to` = '".$to['to']."',
                    `total_sum` = ".(int)$to['sum'].",
                    `date` = NOW()
                ")->execute();
                
                //Finish transaction and reload the page
                $transaction->commit();
                return $this->refresh();
            } catch (\Exception $exception) {
                $transaction->rollBack();
                $error = $exception->getMessage();
            }
            
            //Set false error for view
            if(!isset($error)) {
                $error = null;
            }
        }
        return $this->render('transaction', [
            'users' => $users,
            'error' => $error
        ]);
    }
}
