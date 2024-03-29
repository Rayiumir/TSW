<!-- تبلیغات زیر محصولات -->
<section class="mb-3">
            <div class="row">
                <?php
                    $slider = new WP_Query(
                        array(
                            'post_type' => 'adss',
                            'posts_per_page' => 4
                        )
                    );
                    if($slider->have_posts()){
                        while($slider->have_posts()){
                            $slider->the_post();
                ?>
                <div class="col-6 col-md-3">
                    <?php 
                        $urlFour = get_post_meta($post->ID, 'urlFour', true);
                        if(!empty($urlFour)) { 
                    ?>
                    <a href="<?php echo $urlFour; ?>">
                        <figure>
                            <?php the_post_thumbnail( 'full', ['class' => 'img-fluid rounded-4'] ); ?>
                        </figure>
                    </a>
                    <?php } ?>
                </div>
                <?php } }?>
            </div>
        </section>
        <!-- پایان تبلیغات زیر محصولات -->