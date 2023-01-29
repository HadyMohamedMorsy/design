<div class="owl-carousel-wrapper">

    <div class="box-92819">
        <div class="owl-carousel slide-one-item-alt-text">


            <?php
        
            // Check rows existexists.
            if (have_rows('carousel-content')):
                // Loop through rows.
                while (have_rows('carousel-content')):
                    the_row();
            
                    // Load sub field value.
                    $sub_value = get_sub_field('group-content');
                    // Do something...
                            ?>
            <div>
                <h1 class="text-uppercase mb-3"><?php echo $sub_value['title']; ?> </h1>
                <p class="mb-5"> <?php echo $sub_value['content']; ?> </p>
                <p class="mb-0"><a href="#" class="btn btn-primary rounded-0"> <?php echo $sub_value['button']; ?> </a></p>
            </div>
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

    <div class="owl-carousel owl-1 ">
        <?php $images = get_field('carousel'); ?>
        <?php
            foreach($images as $image){
                ?>
                    <div class="ftco-cover-1" style="background-image: url('<?php echo $image['url']; ?>);"></div>
                <?php
            }
        ?>
    </div>
</div>
