<?php if (have_rows('liberators_group')): ?>
<?php while (have_rows('liberators_group')): the_row(); ?>

<section class="container-fluid p-0 m-0 liberators">
    <div class="liberators-box">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php $image = get_sub_field('liberators_image'); ?>
                    <?php $link = get_sub_field('liberators_link_download'); ?>
                    <a href="<?php echo esc_url($link['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>"
                            class="d-block object-fit-cover my-0 mx-auto " alt="<?php echo esc_attr($image['alt']); ?>"
                            height="460px" width="auto"></a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="liberators-content">
                        <h2 class="liberators-title"><?php the_sub_field('liberators_title'); ?></h2>
                        <?php the_sub_field('liberators_content'); ?>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>
<?php endwhile; ?>
<?php endif; ?>