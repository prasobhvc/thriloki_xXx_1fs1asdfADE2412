<?php include("header.tpl.php"); ?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <?php include("left-sidebar.tpl.php"); ?>
            <div class="col-sm-9">
                <div class="well well-small">
                    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                    <a id="main-content"></a>
                    <?php print render($title_prefix); ?>
                    <?php if ($messages): ?>
                        <div id="messages"><div class="section clearfix">
                                <?php print $messages; ?>
                            </div></div> <!-- /.section, /#messages -->
                    <?php endif; ?>

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
                	

            </div>
        </div>
    </div>
</div>

<?php include("footer.tpl.php"); ?>