<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        <?php endif; ?>
                        <!-- <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Design Innovations has been making the world more beautiful one room at a
                            time. No matter your design style, our experienced designers will help you
                            create a design that perfectly reflects the way you live in your home.</p> -->
                    </div>
                    <div class="col-md-4 ml-auto">
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-md-4 ml-auto">
                <div class="mb-5">
                    <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                    <form action="#" method="post" class="footer-suscribe-form">
                        <div class="input-group mb-3">
                            <input type="text"
                                class="form-control rounded-0 border-secondary text-white bg-transparent"
                                placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button"
                                    id="button-addon2">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="pt-5">
                    <p class="small">Copyright &copy; <?php $year = date("Y"); echo $year; ?>. All rights <strong><a href="#">DX Egypt </a></strong> reserved.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</footer>
