<section class="slider container-fluid p-0 m-0" id="slider" role="Banner">


    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">


        <div class="carousel-indicators">

            <?php if (have_rows('slider')): $index = 0;
                // Loop through rows.
                while (have_rows('slider')) : the_row(); ?>
            <?php $aria_current = $index === 0 ? 'true' : 'false'; ?>
            <button type="button" data-bs-target="#carouselExample" aria-current="<?php echo $aria_current; ?>"
                aria-label="Slide <?php echo $index + 1; ?>" data-bs-slide-to="<?php echo $index; ?>"></button>

            <?php $index++;

                endwhile;
            endif; ?>
        </div>

        <?php
        if (have_rows('slider')): $index = 0;
            // Loop through rows.
            while (have_rows('slider')) : the_row(); ?>
        <?php
                $active_class = $index === 0 ? 'active' : '';
                $active_attr = $index === 0 ? 'data-carousel-item="active"' : 'data-carousel-item';
                ?>
        <div class="carousel-inner">
            <!-- Item <?php echo $index; ?> -->
            <div class="carousel-item <?php echo $active_class; ?>" <?php echo $active_attr; ?>>
                <?php $image = get_sub_field('slider_image'); ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="d-block w-100 position-absolute"
                    alt="<?php echo esc_url($image['alt']); ?>">
                <div class="container content-slider">
                    <div class="row">
                        <div class="col-12 col-lg-6 content-item">
                            <h1 class="text-title"><?php echo esc_attr(the_sub_field('slider_title')); ?>
                            </h1>
                            <p class="text-content mb-4"><?php the_sub_field('slider_content'); ?>
                            </p>
                            <button class="btn btn-black"><?php the_sub_field('slider_button_text'); ?></button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php
                $index++;
            // End loop.
            endwhile;
        // No value.
        else :
            // Do something...
            echo '<p> No slides found.</p>';
        endif; ?>

    </div>

</section>