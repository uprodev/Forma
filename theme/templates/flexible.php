<?php

$id = get_the_ID();

?>

<?php if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>








<section class="news" >
    <div class="content-width" data-aos="fade-up" data-aos-duration="1000">
        <h6 class="label">News</h6>
        <h2 class="title title-black-2">Insights & industry news</h2>
        <div class="content">
            <div class="item">
                <div class="wrap">
                    <div class="title-wrap">
                        <h6 class="title-item">Best smart wearables of 2023</h6>
                        <p class="date">10.03.24</p>
                    </div>
                    <div class="text-wrap">
                        <p>Lorem ipsum dolor sit amet consectetur. Sagittis aenean quis nulla volutpat molestie sed senectus. Vel amet sed ultricies quam id.</p>
                    </div>
                    <div class="link-wrap">
                        <a href="#" class="link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrap">
                    <div class="title-wrap">
                        <h6 class="title-item">Gadget review: Release of new Airy Pods</h6>
                        <p class="date">10.03.24</p>
                    </div>
                    <div class="text-wrap">
                        <p>Lorem ipsum dolor sit amet consectetur. Sagittis aenean quis nulla volutpat molestie sed senectus. Vel amet sed ultricies quam id.</p>
                    </div>
                    <div class="link-wrap">
                        <a href="#" class="link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrap">
                    <div class="title-wrap">
                        <h6 class="title-item">Long term benefits of clean energy sources</h6>
                        <p class="date">10.03.24</p>
                    </div>
                    <div class="text-wrap">
                        <p>Lorem ipsum dolor sit amet consectetur. Sagittis aenean quis nulla volutpat molestie sed senectus. Vel amet sed ultricies quam id.</p>
                    </div>
                    <div class="link-wrap">
                        <a href="#" class="link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
