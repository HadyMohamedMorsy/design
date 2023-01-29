<div class="site-section design">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="h-100 bg-white box-29291">
                <?php
                    // Check rows existexists.
                    if (have_rows('content-about-home-page')):
                        // Loop through rows.
                        while (have_rows('content-about-home-page')):
                            the_row();
                            // Load sub field value.
                            $sub_value = get_sub_field('group-about');
                            // Do something...
                            ?>
                                <h1 class="heading-39291"><?php echo $sub_value['title']; ?></h1>
                                <p> <?php echo $sub_value['content']; ?> </p>
                            <?php
                            // End loop.
                        endwhile;
                        // No value.
                    else:
                // Do something...
                    endif;
                ?>
            </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="owl-carousel owl-3">
                <?php $images = get_field('carousel-about-home-page'); ?>
                <?php
                    foreach($images as $image){
                        ?>
                            <img src="<?php echo $image['url']; ?>" alt="Image" class="img-fluid">
                        <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
