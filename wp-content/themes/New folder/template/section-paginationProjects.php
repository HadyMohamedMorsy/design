<?php
$the_query = new WP_Query( array('posts_per_page'=> 8,
        'post_type'=>'our_projects',
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
    ); 
?>
<div class="site-section">
    <div class="container">
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
                    <?php 
                    $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $the_query->max_num_pages
                        ) );
                    ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

