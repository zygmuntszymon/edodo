<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <?php

            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>

                    <h2><?php the_title(); ?></h2>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
            <?php }
            } ?>

        </div>
        <div class="col-3">
            <div id="sidebar-primary" class="sidebar">
                <?php dynamic_sidebar('primary'); ?>
            </div>
        </div>
    </div>

    <?php get_footer() ?>