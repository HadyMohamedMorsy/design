    <?php
        $args = [
            'post_type' => 'testimonials',
        ];
    ?>
    
    <?php $the_query = new WP_Query($args); ?>

<div class="site-section section-4">
        <div class="container">

          <div class="row justify-content-center text-center">
            <div class="col-md-8"
                 data-aos="zoom-out">
              <div class="slide-one-item owl-carousel">
                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <blockquote class="testimonial-1">
                            <span class="quote quote-icon-wrap"><span
                                    class="icon-format_quote"></span></span>
                              <?php
                                  $content = get_the_content();
                                  $content = apply_filters('the_content', $content);
                              ?>
                              <?php echo  $content ?>
                            <cite><span class="text-black"> <?php the_title(); ?> </span> &mdash; <span
                                    class="text-muted">CEO and Co-Founder</span></cite>
                        </blockquote>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
    </div>