<section class="container feature">
    <div class="row">
        <?php $featured_posts = get_field('feature'); ?>
        <div id="carouselfeature" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- slides -->
                <?php if ($featured_posts): ?>
                <?php foreach ($featured_posts as $post):   setup_postdata($post);  ?>

                <div class="col-12 col-md-4">
                    <div class="carousel-item active">
                        <div class="card">
                            <?php if (has_post_thumbnail()) :
                                        $thumbnail_url = get_the_post_thumbnail_url($post_obj->ID, 'medium');
                                    ?>
                            <div class="img-wrapper">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top"
                                    alt="<?php echo esc_attr(get_the_title($post_obj->ID)); ?>">
                            </div>
                            <?php endif; ?>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo esc_html(get_the_title($post->ID)) ?></h5>
                                <p class="card-text"><?php echo wp_strip_all_tags(get_the_content($post->ID)) ?></p>
                                <a href="<?php echo esc_url(get_permalink($post->ID)) ?>" class="btn btn-line">Saiba
                                    Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselfeature" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselfeature" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>