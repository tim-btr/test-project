<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $date
 * @property string|null $image
 * @property int|null $viewed
 * @property int|null $user_id
 * @property int|null $status
 * @property int|null $category_id
 *
 * @property Comment[] $comments
 * @property Post2tag[] $post2tags
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','description','content'], 'required'],
            [['description','content'], 'string'],
            [['date'], 'datetime', 'format' => 'php:Y-m-d h:m:s'],
            [['date'], 'default', 'value' => date('Y-m-d h:m:s')],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['post_id' => 'id']);
    }

    /**
     * Gets query for [[Post2tags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPost2tags()
    {
        return $this->hasMany(Post2tag::className(), ['post_id' => 'id']);
    }
    
    /**
     * @param $file
     * @return bool
     */
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
    
    /**
     * @return string
     */
    public function getImage()
    {
        if($this->image) {
            return '/web/uploads/'.$this->image;
        } else {
            return '';
        }
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
    
    
    /**
     * @param $catId
     * @return bool
     */
    public function saveCategory($catId)
    {
        $this->category_id = $catId;
        if($this->category_id) {
            $this->save(false);
            return true;
        } else {
            return false;
        }
    }
}
