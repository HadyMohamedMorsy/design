<?php

$args = [
    'post_type' => 'services',
    'posts_per_page' => 6,
];
?>

<?php $the_query = new WP_Query($args); ?>


<div class="site-section services">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-7">
                <h2 class="heading-39291 mb-0" data-aos="fade-up-right">What We Do</h2>
            </div>
        </div>
        <div class="row">
        <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="service-29193 text-center">
                        <span class="img-wrap mb-5">
                        <?php the_post_thumbnail(); ?>
                        </span>
                        <h3 class="mb-4"> <?php the_title(); ?> </h3>
                        <?php
                            $content = get_the_content();
                            $content = apply_filters('the_content', $content);
                        ?>
                        <?php echo  $content ?> 
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </div>
</div>
