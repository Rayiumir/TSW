<!-- اسلایدر و تبلیغات -->
<div class="mt-3 mb-3">
    <div class="row">
        <div class="col-md-8">
            <?php
                $slider = new WP_Query(
                    array(
                        'post_type' => 'slider',
                        'posts_per_page' => 10
                    )
                );
                if($slider->have_posts()){
            ?>
            <div id="carouselExampleFade" class="carousel slide carousel-fade mb-3">
                <div class="carousel-inner">
                    <?php $i=0; while($slider->have_posts() ) : $slider->the_post(); $active = ($i==0) ? "active" : ""; ?>
                    <div class="carousel-item <?php echo $active; ?>">
                        <?php 
                        $urlOne = get_post_meta($post->ID, 'urlOne', true);
                        if(!empty($urlOne)) { 
                        ?>
                        <a href="<?php echo $urlOne; ?>">
                            <?php the_post_thumbnail( 'large', ['class' => 'd-block w-100 rounded-4'] ); ?>
                        </a>
                        <?php } ?>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
        <div class="col-md-4">
            <?php
                $slider = new WP_Query(
                    array(
                        'post_type' => 'sliderads',
                        'posts_per_page' => 2
                    )
                );
                if($slider->have_posts()){
                    while($slider->have_posts()){
                        $slider->the_post();
            ?>
            <div class="mb-2">
                <?php 
                    $urlTwo = get_post_meta($post->ID, 'urlTwo', true);
                    if(!empty($urlTwo)) { 
                ?>
                <a href="<?php echo $urlTwo; ?>">
                    <figure>
                        <?php the_post_thumbnail( 'full', ['class' => 'img-fluid rounded-4'] ); ?>
                    </figure>
                </a>
                <?php } ?>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>
<!-- پایان اسلایدر و تبلیغات -->