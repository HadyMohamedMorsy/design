<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar site-navbar-target bg-white" role="banner">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between position-relative">

            <div class="site-logo">
                <!-- logo is here -->
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'small');
                
                if (has_custom_logo()) {
                    echo '<img src="' .
                        esc_url($logo[0]) .
                        '" alt="' .
                        get_bloginfo('name') .
                        '" style=" width: 250px;
                                    height: 100px;
                                    object-fit: cover;">';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
                <!-- logo is here -->
            </div>

            <div class="toggle-button d-inline-block d-lg-none">
                <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                        class="icon-menu h3 text-primary"></span></a>
            </div>
            <div class="">
                <nav class="site-navigation text-left mr-auto " role="navigation">
                    <!-- links is here -->
                    <?php nav(); ?>
                    <!-- links is here -->
                </nav>
            </div>
        </div>
    </div>
</header>
