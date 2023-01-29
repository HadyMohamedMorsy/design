<?php /* Template Name: contact */ ?>
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
        <div class="site-section">
            <div class="container">

            <div class="row">
                <div class="col-lg-8 mb-5">
                    <?php get_template_part('template/section', 'contactForm'); ?>
                </div>
                <div class="col-lg-4 ml-auto"
                    data-aos="flip-right">
                    <div class="bg-white p-3 p-md-5">
                        <?php  $contact = get_field('contact-details');?>
                        <h3 class="heading-39291"> <?php echo $contact['contact-info']; ?> </h3>
                        <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3">
                            <span
                                class="d-block text-black small text-uppercase font-weight-bold">Address:</span>
                            <span> <?php echo $contact['address']; ?> </span>
                        </li>
                        <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Phone:</span> <span> <?php echo $contact['phone']; ?></span></li>
                        <li class="d-block mb-3"><span
                                class="d-block text-black small text-uppercase font-weight-bold">Email:</span><span> <?php echo $contact['email']; ?></span>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- footer -->
        <?php get_template_part('template/section', 'footer'); ?>
        <!-- footer -->


    </div>
    <?php get_footer(); ?>
</body>

</html>
