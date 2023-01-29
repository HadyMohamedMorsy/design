
    <?php
        $args = [
            'post_type' => 'team',
        ];
    ?>
    
    <?php $the_query = new WP_Query($args); ?>

      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5 section-2-title">
            <div class="col-md-6"
                 data-aos="zoom-out">
              <h2 class="heading-39291">Meet Our Team</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis provident
                eius ratione velit, voluptas laborum nemo quas ad necessitatibus placeat?</p>
            </div>
          </div>
          <div class="row align-items-stretch">
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-md-6 mb-5"
                                data-aos="flip-right">
                            <div class="post-entry-1 h-100 bg-white text-center">
                                <a href="#"
                                class="d-inline-block">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2> <?php the_title(); ?> </h2>
                              <?php
                                  $content = get_the_content();
                                  $content = apply_filters('the_content', $content);
                              ?>
                              <?php echo  $content ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
          </div>
        </div>
      </div>