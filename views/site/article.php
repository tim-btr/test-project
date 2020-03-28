<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Single post';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="/uploads/<?= htmlspecialchars($post->image) ?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= htmlspecialchars(Url::toRoute(['site/categories', 'id' => $post->category_id])); ?>"><?= htmlspecialchars($post->category->title) ?></a></h6>
                            
                            <h1 class="entry-title"><a href="blog.html"><?= htmlspecialchars($post->title) ?></a></h1>
                        
                        
                        </header>
                        <div class="entry-content">
                            <?= htmlspecialchars($post->content) ?>
                        </div>
                        <div class="decoration">
                            <a href="#" class="btn btn-default">Decoration</a>
                            <a href="#" class="btn btn-default">Decoration</a>
                        </div>
                        
                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By Rubel On February 12, 2016</span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <div class="top-comment"><!--top comment-->
                    <img src="/uploads<?= htmlspecialchars($post->id) ?>" class="pull-left img-circle" alt="">
                    <h4>Rubel Miah</h4>
                    
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor
                        invidunt ut labore et dolore magna aliquyam erat.</p>
                </div><!--top comment end-->
                <div class="row"><!--blog next previous-->
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="#">
                                <img src="/themes/test-proj/images/blog-next.jpg" alt="">
                                
                                <div class="overlay">
                                    
                                    <div class="promo-text">
                                        <p><i class=" pull-left fa fa-angle-left"></i></p>
                                        <h5>Rubel is doing Cherry theme</h5>
                                    </div>
                                </div>
                            
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="#">
                                <img src="/themes/test-proj/images/blog-next.jpg" alt="">
                                
                                <div class="overlay">
                                    <div class="promo-text">
                                        <p><i class=" pull-right fa fa-angle-right"></i></p>
                                        <h5>Rubel is doing Cherry theme</h5>
                                    
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--blog next previous end-->
                <div class="related-post-carousel"><!--related post carousel-->
                    <div class="related-heading">
                        <h4>You might also like</h4>
                    </div>
                    <div class="items">
                        <div class="single-item">
                            <a href="#">
                                <img src="/themes/test-proj/images/related-post-1.jpg" alt="">
                                
                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                        
                        
                        <div class="single-item">
                            <a href="#">
                                <img src="/themes/test-proj/images/related-post-2.jpg" alt="">
                                
                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                        
                        
                        <div class="single-item">
                            <a href="#">
                                <img src="/themes/test-proj/images/related-post-3.jpg" alt="">
                                
                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                        
                        
                        <div class="single-item">
                            <a href="#">
                                <img src="/themes/test-proj/images/related-post-1.jpg" alt="">
                                
                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                        
                        <div class="single-item">
                            <a href="#">
                                <img src="/themes/test-proj/images/related-post-2.jpg" alt="">
                                
                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                        
                        
                        <div class="single-item">
                            <a href="#">
                                <img src="/themes/test-proj/images/related-post-3.jpg" alt="">
                                
                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                    </div>
                </div><!--related post carousel-->
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