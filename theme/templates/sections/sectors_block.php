<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$img = get_sub_field('image');
$video = get_sub_field('video_url');
$title_video = get_sub_field('title_video');
$time_video = get_sub_field('time_video');
$buttons = get_sub_field('buttons');

?>

<section class="info-block black" data-aos="fade-up" data-aos-duration="1000">
    <div class="content-width" >
        <?php if($subtitle):?>
            <h6 class="label"><?= $subtitle;?></h6>
        <?php endif;?>
        <?php if($title):?>
            <h2 class="title title-white-1"><?= $title;?></h2>
        <?php endif;?>

        <div class="content">
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

            <?php if($buttons):?>
                <div class="btn-wrap">
                    <?php foreach($buttons as $btn):
                        $link = $btn['link'];

                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-border" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
                        <?php endif; ?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>

</section>
