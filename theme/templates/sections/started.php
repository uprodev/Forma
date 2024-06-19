<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$slider = get_sub_field('slider');

?>

<section class="started-slider-wrap">
    <div class="wrap-section">
        <div class="content-width" data-aos="fade-up" data-aos-duration="1000">
            <div class="top">
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?php if($subtitle):?>
                    <p><?= $subtitle;?></p>
                <?php endif;?>
            </div>
            <?php if($slider):?>
                <div class="slider-wrap">
                    <div class="swiper started-slider">
                        <div class="swiper-wrapper">
                            <?php foreach($slider as $sli):?>
                                <div class="swiper-slide">
                                    <div class="wrap">
                                        <p class="date"><?= $sli['year'];?></p>
                                        <h6><?= $sli['title'];?></h6>
                                        <p><?= $sli['text'];?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="nav-wrap ">
                        <div class="wrap ">
                            <div class="swiper-button-next started-next"></div>
                            <div class="swiper-button-prev started-prev"></div>
                        </div>
                        <div class="p-wrap ">
                            <div class="swiper-pagination started-pagination"></div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
