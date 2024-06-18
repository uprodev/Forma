<?php

$id = get_the_ID();

?>

<?php if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>






<section class="services black">
    <div class="content-width">
        <div class="title-wrap">
            <h6 class="label">Services</h6>
            <h2 class="title title-white-2">Discover how we help you get the most from injection moulding</h2>
        </div>
        <div class="content " >
            <div class="bg">
                <img src="img/bg-2.png" alt="">
            </div>
            <div class="wrap rellax" data-rellax-speed="2">
                <div class="item " >
                    <figure>
                        <a href="#">
                            <img src="img/img-2-1.jpg" alt="">
                        </a>
                    </figure>
                    <div class="text">
                        <h6>Technical design & specification</h6>
                        <p>Immersing ourselves in your vision & designing unique, eye-catching concepts to bring them to life</p>
                        <div class="link-wrap">
                            <a href="#" class="link">Discover more</a>
                        </div>
                    </div>
                </div>
                <div class="item " >
                    <figure>
                        <a href="#">
                            <img src="img/img-2-2.jpg" alt="">
                        </a>
                    </figure>
                    <div class="text">
                        <h6>Prototyping</h6>
                        <p>Bridge the gap between concept & production by visualising, testing & refining your design before full-scale manufacturing</p>
                        <div class="link-wrap">
                            <a href="#" class="link">Discover more</a>
                        </div>
                    </div>
                </div>
                <div class="item " >
                    <figure>
                        <a href="#">
                            <img src="img/img-2-3.jpg" alt="">
                        </a>
                    </figure>
                    <div class="text">
                        <h6>Production</h6>
                        <p>Combining state-of-the-art machinery and skilled artisans & engineers to bring your vision into reality</p>
                        <div class="link-wrap">
                            <a href="#" class="link">Discover more</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

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
