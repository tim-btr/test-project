<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Transaction';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if($error != null) : ?>
                <div class="alert alert-danger" role="alert"><?= $error ?></div>
                <?php endif; ?>
                <p class="h1">Send money</p>
                <?php
                if(!Yii::$app->user->isGuest) {
                    
                    //Send money form
                    $sendMoney = ActiveForm::begin();?>
                  To:
                  <select name="to" id="">
                    <?php foreach($users as $user):
                      if($user->name == Yii::$app->user->identity->name) continue; ?>
                      <option value="<?= htmlspecialchars($user->name) ?>"><?= htmlspecialchars($user->name) ?></option>
                    <?php endforeach; ?>
                  </select>
                    Summ:
                    <input name="sum" type="number" step="0.01" min="0" placeholder="0.00">
                    <?php
                    echo Html::submitButton('Send Money', ['class' => 'btn btn-success']);
                    ActiveForm::end();
                }
                ?>
               
            </div>
            
            
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
                        
                        <div class="popular-post">
                            
                            
                            <a href="#" class="popular-img"><img src="/themes/test-proj/images/p1.jpg" alt="">
                                
                                <div class="p-overlay"></div>
                            </a>
                            
                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            
                            </div>
                        </div>
                        <div class="popular-post">
                            
                            <a href="#" class="popular-img"><img src="/themes/test-proj/images/p1.jpg" alt="">
                                
                                <div class="p-overlay"></div>
                            </a>
                            
                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">
                            
                            
                            <a href="#" class="popular-img"><img src="/themes/test-proj/images/p1.jpg" alt="">
                                
                                <div class="p-overlay"></div>
                            </a>
                            
                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
                        
                        <div class="thumb-latest-posts">
                            
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/themes/test-proj/images/r-p.jpg" alt="">
                                        
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">
                            
                            
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/themes/test-proj/images/r-p.jpg" alt="">
                                        
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">
                            
                            
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/themes/test-proj/images/r-p.jpg" alt="">
                                        
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">
                            
                            
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/themes/test-proj/images/r-p.jpg" alt="">
                                        
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Food & Drinks</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Travel</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Business</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Story</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">DIY & Tips</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>