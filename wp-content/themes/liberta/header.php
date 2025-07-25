<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<?php
$navbar_scheme   = get_theme_mod('navbar_scheme', 'navbar-light bg-hidden'); // Get custom meta-value.
$navbar_position = get_theme_mod('navbar_position', 'static'); // Get custom meta-value.

$search_enabled  = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'liberta-global'); ?></a>

    <div id="wrapper">
        <header class="container-fluid head">
            <nav id="header" class="navbar navbar-expand-md <?php echo esc_attr($navbar_scheme);
                                                            if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' fixed-top';
                                                            elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' fixed-bottom';
                                                            endif;
                                                            if (is_home() || is_front_page()) : echo ' home';
                                                            endif; ?> <?php  if (is_single() || is_archive()) : echo 'bg-black';
                                                                        endif; ?>">
                <div class="container-fluid ps-sm-0 pe-sm-0 container-md ">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"
                        title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                        <?php
                        $header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

                        if (! empty($header_logo)) :
                        ?>
                        <img src="<?php echo esc_url($header_logo); ?>"
                            alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
                        <?php
                        else : ?>
                        <!-- Navbar Brand -->
                        <a class="navbar-brand" href="<?= esc_url(home_url()); ?>">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/img/logo/logo.svg', 'default'); ?>"
                                alt="<?php bloginfo('name'); ?> Logo" class="d-td-none me-2">
                        </a>
                        <?php endif;
                        ?>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                        aria-controls="navbar" aria-expanded="false"
                        aria-label="<?php esc_attr_e('Toggle navigation', 'liberta-global'); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="navbar" class="collapse navbar-collapse">
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
                            <div class="offcanvas-header">
                                <span class="h5 offcanvas-title">Menu</span>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <?php
                        // Loading WordPress Custom Menu (theme_location).
                        wp_nav_menu(
                            array(
                                'menu_class'     => 'navbar-nav me-auto',
                                'container'      => '',
                                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                                'theme_location' => 'main-menu',
                            )
                        );

                        if ('1' === $search_enabled) :
                        ?>
                        <!-- <form class="search-form my-2 my-lg-0" role="search" method="get"
                            action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="input-group">
                                <input type="text" name="s" class="form-control"
                                    placeholder="<?php esc_attr_e('Search', 'liberta-global'); ?>"
                                    title="<?php esc_attr_e('Search', 'liberta-global'); ?>" />
                                <button type="submit" name="submit"
                                    class="btn btn-outline-secondary"><?php esc_html_e('Search', 'liberta-global'); ?></button>
                            </div>
                        </form> -->
                        <?php
                        endif;
                        ?>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav><!-- /#header -->
        </header>

        <main id="main" class="content" <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' style="padding-top: 100px;"';
                                        elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' style="padding-bottom: 100px;"';
                                        endif; ?>>
            <?php
            // If Single or Archive (Category, Tag, Author or a Date based page).
            if (is_single() || is_archive()) :
            ?>
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <?php
                    endif;
                        ?>