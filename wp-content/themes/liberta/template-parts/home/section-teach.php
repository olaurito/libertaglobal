<?php if (have_rows('teach')): ?>
<?php while (have_rows('teach')): the_row(); ?>
<?php $image = get_sub_field('teach_image'); ?>
<section class="container-fluid teach">
    <div class="container teach-box">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="teach-content">
                    <h2 class="teach-title"><?php the_sub_field('teach_title'); ?></h2>
                    <ul class="teach-list">
                        <?php $items = get_sub_field('teach_item'); ?>
                        <?php while (have_rows('teach_item')): the_row(); ?>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow.svg" class="icon"> <?php
                            the_sub_field('teach_list_item'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>

            </div>
            <div class="col-12 col-md-7">
                <img src="<?php echo esc_url($image['url']); ?>" class="d-block img-teach"
                    alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
        </div>
    </div>

</section>
<?php endwhile; ?>
<?php endif; ?>