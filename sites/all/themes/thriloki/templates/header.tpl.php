<?php global $user; ?>
<div id="welcomeLine">
    <div class="container">
        <div class="col-sm-6">
            <?php
            if ($user->uid) {
                print 'Welcome ' . $user->name . '!';
            } else {
                print 'Welcome, Guest!';
            }
            ?>
        </div>
        <div class="col-sm-6">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar-top" class="navbar-collapse collapse">
                    <?php if ($secondary_menu): ?>
                        <div id="secondary-menu" class="navigation pull-right">
                            <?php
                            print theme('links__system_secondary_menu', array(
                                'links' => $secondary_menu,
                                'attributes' => array(
                                    'id' => 'secondary-menu-links',
                                    'class' => array('links', 'inline', 'clearfix'),
                                ),
                                'heading' => array(
                                    'text' => t('Secondary menu'),
                                    'level' => 'h2',
                                    'class' => array('element-invisible'),
                                ),
                            ));
                            ?>
                        </div> <!-- /#secondary-menu -->
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>


</div>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php if ($logo): ?>
                    <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-sm-9">
				<div class="login_top pull-right">
					<?php print render($page['login_top']); ?>
				</div>
                <!--<form class="form-inline navbar-search pull-right" method="post" action="products.html" >
                    <input id="srchFld" class="form-control srchTxt" type="text" />
                    <select class="form-control srchTxt">
                        <option>All </option>
                        <option>CLOTHES </option>
                        <option>FOOD AND BEVERAGES </option>
                        <option>HEALTH & BEAUTY </option>
                        <option>SPORTS & LEISURE </option>
                        <option>BOOKS & ENTERTAINMENTS </option>
                    </select> 
                    <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                </form>-->
                <?php /* ?><div id="top-main-menu" class="pull-left">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <?php if ($main_menu): ?>
                                <div id="main-menu" class="navigation">
                                    <?php
                                    print theme('links__system_main_menu', array(
                                        'links' => $main_menu,
                                        'attributes' => array(
                                            'id' => 'topMenu',
                                            'class' => array('navbar'),
                                        ),
                                        'heading' => array(
                                            'text' => t('Main menu'),
                                            'level' => 'h2',
                                            'class' => array('element-invisible'),
                                        ),
                                    ));
                                    ?><!-- /#main-menu -->
                                </div>
                            <?php endif; ?>
                        </div>
                    </nav>
                </div><?php */ ?>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->