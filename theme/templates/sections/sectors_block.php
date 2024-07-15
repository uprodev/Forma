<?php

$subtitle = get_sub_field('subtitle_sectors');
$title_s = get_sub_field('title_sectors');
$slider = get_sub_field('slider');

$buttons = get_sub_field('buttons');

?>

<section class="info-block black" data-aos="fade-up" data-aos-duration="1000">
    <div class="content-width" >
        <?php if($subtitle):?>
            <h6 class="label"><?= $subtitle;?></h6>
        <?php endif;?>
        <?php if($title_s):?>
            <h2 class="title title-white-1"><?= $title_s;?></h2>
        <?php endif;?>

        <?php if($slider):?>
        <div class="content">
            <div class="swiper info-slider">
                <div class="swiper-wrapper">

                    <?php foreach($slider as $slide):
                        $text = $slide['text'];
                        $link = $slide['link'];
                        $img = $slide['image'];
                        $video = $slide['video_url'];
                        $title_video = $slide['title_video'];
                        $time_video = $slide['time_video'];
                        ?>
                        <div class="swiper-slide">
                            <div class="img-bg">
                                <?php if($video):?>
                                    <div class="btn-wrap-play">
                                        <a data-fancybox href="<?= $video;?>" class="btn-play">
                            <span class="icon-wrap">
                                <span class="bg-span"></span>
                                <img src="<?= get_template_directory_uri();?>/img/play.svg" alt="play">
                            </span>
                                            <span class="text-wrap">
                                <?php if($title_video):?>
                                    <span class="white"><?= $title_video;?></span>
                                <?php endif;?>
                                                <?php if($time_video):?>
                                                    <span class="grey"><?= $time_video;?></span>
                                                <?php endif;?>
                            </span>
                                        </a>
                                    </div>
                                <?php endif;?>

                                <?php if($img):?>
                                    <div class="bg">
                                        <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                                    </div>
                                <?php endif;?>
                                <div class="wrap">
                                    <div class="text">
                                        <?= $text;?>

                                        <?php if( $link ):
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <div class="link-wrap">
                                                <a class="link" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

            <div class="btn-wrap">

                <?php foreach($slider as $slide):
                    $name = $slide['name'];?>
                    <a class="btn-border" href="#"><span><?= $name; ?></span></a>
                <?php endforeach;?>
            </div>
            <?php endif;?>

        </div>
    </div>

</section>
