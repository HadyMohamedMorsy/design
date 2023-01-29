<?php

$args = [
    'post_type' => 'our_projects',
    'posts_per_page' => 4,
];

?>

<?php $the_query = new WP_Query($args); ?>

<div class="site-section projects">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-7">
                <h2 class="heading-39291 mb-0" data-aos="fade-up-right">Our Projects</h2>
            </div>
            <div class="col-md-5 text-right" data-aos="fade-up-left">
                <p class="mb-0"><a href="#" class="more-39291">View All Projects</a></p>
            </div>
        </div>

        <div class="row">
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <div class="media-02819">
                            <a href="#" class="img-link small"> <?php the_post_thumbnail(); ?></a>
                            <h3><a href="#"> <?php the_title(); ?> </a></h3>
                            <span>Melbourne, Australia</span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
