<?php $banner = get_field('banner');  ?>
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1"
            style="background-image: url('<?php echo $banner['image-banner'] ?>');">
        <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 text-center">
            <div class="box-92819">

                <h1 class="text-uppercase text-black mb-3"><?php echo $banner['title'] ?> </h1>
                <p class="mb-0"> <?php echo $banner['content']  ?></p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>