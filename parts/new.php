<!-- محصولات جدید -->
<section class="card border-0 rounded-4 mt-3 mb-3">
            <div class="card-body">
                <span class="fs-5 fw-bold"><i class="fa-duotone fa-sparkles"></i> محصولات جدید</span>
                <div class="row">
                    <div class="MultiCarousel" data-items="1,3,4,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <?php
                                $new = new WP_Query(
                                    array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 20,
                                        'orderby' => 'id'
                                    )
                                );

                                if($new->have_posts(  )) {
                                    while($new->have_posts()) {
                                        $new->the_post();
                                        global $product;
                            ?>
                            <div class="item">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <?php the_post_thumbnail( 'full', ['class' => 'img-fluid rounded-4'] ); ?>
                                            </figure>
                                            <h1 class="fs-4 fw-bold"><?php the_title() ?></h1>
                                            <div class="text-center text-success fs-3">
                                                <?php echo $product->get_price_html(); ?>
                                            </div>
                                            <div class="d-grid gep-2 mt-3">
                                                <button type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> خرید انلاین </button>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                            <?php } } wp_reset_query(); ?>
                        </div>
                        <button class="btn btn-light leftLst"><i class="fa-duotone fa-arrow-left"></i></button>
                        <button class="btn btn-light rightLst"><i class="fa-duotone fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- پایان محصولات جدید -->