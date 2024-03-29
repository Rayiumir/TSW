<!-- اطلاعات پشتیبانی -->
<section class="card border-0 rounded-4 text-center">
    <div class="card-body">
        <div class="row">
            <?php
                $slider = new WP_Query(
                    array(
                        'post_type' => 'supports',
                        'posts_per_page' => 6
                    )
                );
                if($slider->have_posts()){
                    while($slider->have_posts()){
                        $slider->the_post();
            ?>
            <div class="col-6 col-md-2 p-2">
                <div class="support_info icon_front mt-3 mb-5">
                    <?php 
                        $urlThree = get_post_meta($post->ID, 'urlThree', true);
                        if(!empty($urlThree)) { 
                    ?>
                    <i class="fa-duotone <?php echo $urlThree; ?> fa-3x"></i>
                    <?php } ?>
                </div>
                <h6 class="fw-bold"><?php the_title() ?></h6>
            </div>
            <?php } } ?>

        </div>
    </div>
</section>
<!-- پایان اطلاعات پشتیبانی -->