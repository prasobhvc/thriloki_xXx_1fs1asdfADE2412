<?php include("header.tpl.php"); ?>

<?php //include("home-slider.tpl.php"); ?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <?php include("left-sidebar.tpl.php"); ?>
            <div class="col-sm-9">
                <div class="well well-small">
                    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                    <a id="main-content"></a>
                    <?php print render($title_prefix); ?>

                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <h1 class="title" id="page-title">
                            <?php print $title; ?>
                        </h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($tabs): ?>
                        <div class="tabs">
                            <?php print render($tabs); ?>
                        </div>
                    <?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links">
                            <?php print render($action_links); ?>
                        </ul>
                    <?php endif; ?>

                    <?php print $feed_icons; ?>
                    <?php print render($page['content']); ?>
                </div>
                <!--<div class="well well-small">
                    <h4>Featured Movies <small class="pull-right"><a href="movies">Look for more movies</a></small></h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/b1.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/b2.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/b3.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/b4.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/5.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/6.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/7.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/8.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/9.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/10.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/11.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/1.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/2.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/3.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/4.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/5.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <h4>Latest Products </h4>
                <ul class="row">
                    <li class="col-sm-3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/6.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p> 
                                    Lorem Ipsum is simply dummy text. 
                                </p>

                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/7.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p> 
                                    Lorem Ipsum is simply dummy text. 
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/8.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p> 
                                    Lorem Ipsum is simply dummy text. 
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/9.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p> 
                                    Lorem Ipsum is simply dummy text. 
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/10.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p> 
                                    Lorem Ipsum is simply dummy text. 
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/products/11.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p> 
                                    Lorem Ipsum is simply dummy text. 
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                </ul>	-->

            </div>
        </div>
    </div>
</div>

<?php include("footer.tpl.php"); ?>