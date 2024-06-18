<?php

$logo = get_field('logo', 'options');
$img = get_sub_field('image');
$title = get_sub_field('title');
$text = get_sub_field('text');
$video = get_sub_field('video_url');
$title_video = get_sub_field('title_video');
$time_video = get_sub_field('time_video');

?>


<section class="home-banner">
    <?php if($img):?>
        <div class="bg">
            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>" class="bg-img">
        </div>
    <?php endif;?>
    <div class="content-width">
        <?php if($logo):?>
        <div class="logo-head">
                <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
            </div>
        <?php endif;?>

        <div class="content" data-aos="fade-up" data-aos-delay="3000" data-aos-duration="1000">
            <div class="text">
                <?php if($title):?>
                    <h1><?= $title;?></h1>
                <?php endif;?>
                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>
            </div>
            <?php if($video):?>
                <div class="btn-wrap">
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
        </div>
    </div>
</section>
