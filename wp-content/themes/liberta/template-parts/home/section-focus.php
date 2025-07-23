<section class="containre-fluid circle_focus">
    <div class="container focus">
        <div class="row">
            <header class="focus-title">
                <h2><?php echo get_field('focus_title'); ?></h2>
            </header>
            <?php if (have_rows('focus')): ?>
            <?php while (have_rows('focus')): the_row(); ?>
            <?php $image = get_sub_field('focus_image'); ?>
            <?php $is_button = get_sub_field('is_item_focus'); ?>
            <?php $link_button = get_sub_field('focus_link_button'); ?>

            <div class="col-6 col-md-4">
                <?php if ($is_button): ?>
                <div class="focus-content focus-button">
                    <h4 class="focus-button-title"><?php echo get_sub_field('focus_make_part'); ?></h4>
                    <a href="<?php echo esc_url($link_button['url']); ?>" class="btn btn-green">Comece
                        agora</a>

                </div>
                <?php else: ?>
                <div class="focus-content">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="...">
                    <p><span>Educação financeira e investimentos</span> em mercado globais</p>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- <div class="col-6 col-md-4">
                <div class="focus-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-2.png" alt="...">
                    <p><span>Educação financeira e investimentos</span> em mercado globais</p>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="focus-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-8.png" alt="...">
                    <p><span>Educação financeira e investimentos</span> em mercado globais</p>
                </div>
            </div> -->
        </div>
    </div>
</section>