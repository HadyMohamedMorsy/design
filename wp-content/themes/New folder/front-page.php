<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <!-- header -->
        <?php get_template_part('template/section', 'header'); ?>
        <!-- header -->

        <!-- carousel -->
        <?php get_template_part('template/section', 'carousel'); ?>
        <!-- carousel -->

        <!-- design -->
        <?php get_template_part('template/section', 'design'); ?>
        <!-- design -->

        <!-- weDo -->
        <?php get_template_part('template/section', 'services'); ?>
        <!-- weDo -->

        <!-- projects -->

        <?php get_template_part('template/section', 'projects'); ?>
        <!-- projects -->

        <!-- projects -->
        <?php get_template_part('template/section', 'testimonial'); ?>
        <!-- projects -->

        <!-- footer -->
        <?php get_template_part('template/section', 'footer'); ?>
        <!-- footer -->


    </div>
    <?php get_footer(); ?>
</body>

</html>
