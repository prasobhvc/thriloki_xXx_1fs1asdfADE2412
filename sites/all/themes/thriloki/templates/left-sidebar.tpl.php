
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="col-sm-3">
                <div class="well well-small">
                    <span>
                        <img src="<?php print drupal_get_path('theme', 'thriloki'); ?>/images/new.png" alt="cart">
                        Upcoming Movies  <!--<span class="badge badge-warning pull-right">$155.00</span>-->
                    </span>
                    <?php if ($page['sidebar_first']): ?>
                        <?php print render($page['sidebar_first']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            