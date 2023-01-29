<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php
get_header();
?>
    <div class="site-wrap" id="home-section">
    <!-- header -->
    <?php get_template_part('template/section', 'header'); ?>
    <!-- header -->

    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1"
                style="background-image: url('<?php echo  get_template_directory_uri() . '/static/image/hero_2.jpg '?>);">
            <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 text-center">
                <div class="box-92819">
                    <h1 class="text-uppercase text-black mb-3"> BLOG POSTS </h1>
                    <p class="mb-0"> We do this through delivering outstanding design, quality products and exceptional service.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row  mb-5">
          <div class="col-md-7"
                data-aos="zoom-out">
            <h2 class="heading-39291">Blog and Updates</h2>
            <p> We do this through delivering outstanding design, quality products and
              exceptional service.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
      <?php
          while ( have_posts() ) :
              the_post(); ?>
                  <div class="col-lg-3 col-md-6 mb-5"
                      data-aos="flip-left">
                  <div class="post-entry-1 h-100">
                      <div class="post-entry-1-contents">
                      <span class="meta"> <?php the_time('F j ,Y') ?></span>
                      <h2><a href="#"><?php echo the_title() ?></a></h2>
                      <p class="my-3"><a href="#"
                          class="more-39291">Read More</a></p>
                      </div>
                  </div>
                  </div>
              <?php
          endwhile;?>
            <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>

      <!-- footer -->
  <?php get_template_part('template/section', 'footer'); ?>
  <!-- footer -->
<?php

get_footer();

?>
    </div>


</body>

</html>
