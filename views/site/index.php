<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<!--main content start-->
<div class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php
        foreach($posts as $post): ?>
          <article class="post">
            <div class="post-thumb">
              <a href="<?= htmlspecialchars(Url::toRoute(['site/article', 'id' => $post->id])); ?>"><img src="<?= '/uploads/'.htmlspecialchars($post->image) ?>" alt=""></a>

              <a href="<?= htmlspecialchars(Url::toRoute(['site/article', 'id' => $post->id])); ?>" class="post-thumb-overlay text-center">
                <div class="text-uppercase text-center">View Post</div>
              </a>
            </div>
            <div class="post-content">
              <header class="entry-header text-center text-uppercase">
                <h6><a href="<?= htmlspecialchars(Url::toRoute(['site/categories', 'id' => $post->category_id]))?>"><?= htmlspecialchars($post->category->title) ?></a></h6>
                
                <h1 class="entry-title"><a href="<?= htmlspecialchars(Url::toRoute(['site/article', 'id' => $post->id])); ?>"><?= htmlspecialchars($post->title); ?></a></h1>
              </header>
              <div class="entry-content">
                <p><?= htmlspecialchars($post->description) ?></p>
  
                <div class="btn-continue-reading text-center text-uppercase">
                  <a href="<?= htmlspecialchars(Url::toRoute(['site/article', 'id' => $post->id])); ?>" class="more-link">Read more...</a>
                </div>
              </div>
              <div class="social-share">
                <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On <?= htmlspecialchars($post->date); ?></span>
                <ul class="text-center pull-right">
                  <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= htmlspecialchars((int)$post->viewed) ?>
                </ul>
              </div>
            </div>
          </article>
        <?php
        endforeach;
        
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
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
<!-- end main content-->
<!--footer start-->