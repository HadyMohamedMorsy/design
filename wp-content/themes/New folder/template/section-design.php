<div class="site-section design">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="h-100 bg-white box-29291">
                <?php
                    // Check rows existexists.
                     $design = get_field('group-about');
                        ?>
                            <h1 class="heading-39291"><?php echo $design['title']; ?></h1>
                            <p> <?php echo $design['content']; ?> </p>
                        <?php
                ?>
            </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="owl-carousel owl-3">
                <?php $images = get_field('carousel-about-design'); ?>
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
