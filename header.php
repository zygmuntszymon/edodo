<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header d-md-flex my-auto">
        <nav class="container navbar navbar-expand-md zenith-navbar">
            <div class="container-fluid navbar-container">

                <?php if (has_custom_logo()) { ?>

                    <a class="navbar-brand" href="#">
                        <?php the_custom_logo() ?>
                    </a>
                <?php } else { ?>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
                        <p><?php bloginfo('title') ?></p>
                    </a>
                <?php } ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'edodo_main_menu',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-4',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                    <div class="navbar-buttons">
                        <button class="navbar-btn--1">Zaloguj</button>
                        <button class="navbar-btn--2">Załóż konto</button>
                    </div>
                </div>

            </div>
        </nav>
    </header>