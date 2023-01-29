      <?php $story = get_field('company-story');  ?>
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h2 class="heading-39291"
                  data-aos="fade-up-right"><?php echo $story['title'] ?> </h2>
              <div data-aos="fade-right">
                <div>
                    <p> <?php echo $story['content'] ?> </p>
                </div>
              </div>
            </div>

            <div class="col-md-6 ml-auto"
                 data-aos="fade-left">
              <img src="<?php  echo $story['image'] ?>"
                   alt="Image"
                   class="img-fluid">
            </div>
          </div>
        </div>
      </div>