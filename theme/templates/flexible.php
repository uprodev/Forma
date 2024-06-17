<?php

$id = get_the_ID();

?>

<?php if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>

<section class="home-banner">
    <div class="bg">
        <img src="img/bg-1.jpg" alt="" class="bg-img">
    </div>
    <div class="content-width">
        <div class="logo-head">
            <img src="img/logo.svg" alt="">
        </div>
        <div class="content" data-aos="fade-up" data-aos-delay="3000" data-aos-duration="1000">
            <div class="text">
                <h1>Moulding today with technology of tomorrow</h1>
                <p>Professional design, development & production solutions under one roof</p>
            </div>
            <div class="btn-wrap">
                <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk?autoplay=1" class="btn-play">
							<span class="icon-wrap">
								<span class="bg-span"></span>
								<img src="img/play.svg" alt="">
							</span>
                    <span class="text-wrap">
								<span class="white">How it works</span>
								<span class="grey">1:47</span>
							</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="content-width">
        <div class="title-wrap" data-aos="fade-up" data-aos-duration="1000">
            <h6 class="label">Our mission</h6>
            <h2 class="title  title-black-1">We are making injection moulding more accessible by using cutting-edge technology.</h2>
        </div>
        <div class="text" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <p>With our state-of-the-art technology while also offering a cost-effective alternative to other names in the business. Our custom-built machines enable us to produce higher quality parts than our competitors with an unparalleled level of detail at a fraction of the cost.</p>
        </div>
        <div class="logo-wrap" >
            <p>Some brands that trust us</p>
            <div class='marquee marquee1'>
                <div class="item"><img src="img/logo-1.svg" alt=""></div>
                <div class="item"><img src="img/logo-2.svg" alt=""></div>
                <div class="item"><img src="img/logo-3.svg" alt=""></div>
                <div class="item"><img src="img/logo-4.svg" alt=""></div>
                <div class="item"><img src="img/logo-5.svg" alt=""></div>
                <div class="item"><img src="img/logo-6.svg" alt=""></div>
                <div class="item"><img src="img/logo-1.svg" alt=""></div>
                <div class="item"><img src="img/logo-2.svg" alt=""></div>
                <div class="item"><img src="img/logo-3.svg" alt=""></div>
                <div class="item"><img src="img/logo-4.svg" alt=""></div>
                <div class="item"><img src="img/logo-5.svg" alt=""></div>
                <div class="item"><img src="img/logo-6.svg" alt=""></div>
            </div>
        </div>
    </div>

</section>

<section class="info-block black" data-aos="fade-up" data-aos-duration="1000">
    <div class="content-width" >
        <h6 class="label">Sectors</h6>
        <h2 class="title title-white-1">Solutions moulded to you</h2>

        <div class="content">
            <div class="img-bg">
                <div class="btn-wrap-play">
                    <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk?autoplay=1" class="btn-play">
							<span class="icon-wrap">
								<span class="bg-span"></span>
								<img src="img/play.svg" alt="">
							</span>
                        <span class="text-wrap">
								<span class="white">How it works</span>
								<span class="grey">1:47</span>
							</span>
                    </a>
                </div>
                <div class="bg">
                    <img src="img/img-1.jpg" alt="">
                </div>
                <div class="wrap">
                    <div class="text">
                        <h5>‘Catering’ for your needs</h5>
                        <p>Lorem ipsum dolor sit amet consectetur. Tellus praesent dictumst in id eget bibendum quis magna viverra. Ultrices.</p>
                        <div class="link-wrap">
                            <a href="#" class="link">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap">
                <a href="#" class="btn-border"><span>Construction</span></a>
                <a href="#" class="btn-border"><span>Culinary</span></a>
                <a href="#" class="btn-border"><span>Moulding</span></a>
                <a href="#" class="btn-border"><span>Products</span></a>
            </div>
        </div>
    </div>

</section>

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
