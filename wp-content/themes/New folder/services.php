<?php /* Template Name: services */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <!-- header -->
        <?php get_template_part('template/section', 'header'); ?>
        <!-- header -->

        <!-- banner -->
        <?php get_template_part('template/section', 'banner'); ?>
        <!-- banner -->

        <!-- services -->
        <?php get_template_part('template/section', 'services'); ?>
        <!-- services -->

        <!-- testemonials -->
        <?php get_template_part('template/section', 'testimonial'); ?>
        <!-- testemonials -->

        <!-- footer -->
        <?php get_template_part('template/section', 'footer'); ?>
        <!-- footer -->


    </div>
    <?php get_footer(); ?>
</body>

</html>
