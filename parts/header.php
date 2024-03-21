<!-- سربرگ -->
<nav class="navbar navbar-expand-lg bg-body-tertiary mt-4 rounded-4">
    <div class="container">
        <a class="navbar-brand" href="#">
            <figure>
                <img src="<?php echo RAYIUM_URL; ?>/img/LogoRayium.png" class="img-fluid" alt="" srcset="">
            </figure>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarOne" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarOne">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-one',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>
            <div class="d-flex">
                <button class="btn btn-secondary rounded-5 me-3" type="submit"><i class="fa-duotone fa-moon"></i></button>
                <button class="btn btn-success rounded-5" type="submit"><i class="fa-duotone fa-user-plus"></i> ورود / عضویت </button>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbars">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fa-duotone fa-home"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTwo" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTwo">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-two',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
                <form class="d-flex" role="search">
                    <input class="form-control rounded-5 me-2" type="search" placeholder="جستجو در فروشگاه ..." aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</div>
<!-- پایان سربرگ -->