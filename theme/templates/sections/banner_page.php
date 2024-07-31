<?php

$logo = get_field('logo', 'options');
$img = get_sub_field('image');
$image_above = get_sub_field('image_above');
$title = get_sub_field('title');
$link = get_sub_field('link');

?>

<section class="home-banner sector-banner<?= $img?'':' materials-banner';?>">
    <div class="bg">
        <?php if($img):?>
            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>" class="bg-img">
        <?php endif;?>
        <?php if($image_above):?>
            <img src="<?= $image_above['url'];?>" alt="<?= $image_above['alt'];?>" class="after">
        <?php endif;?>
    </div>

    <div class="content-width">
        <?php if($logo):?>
            <div class="logo-head">
                <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
            </div>
        <?php endif;?>
        <div class="content" data-aos="fade-up" data-aos-delay="3000" data-aos-duration="1000">
            <ul class="breadcrumb">
                <li><a href="<?= get_home_url();?>"><?= __('Home', 'options');?></a><span>/</span> </li>
                <li><?php the_title();?></li>
            </ul>
            <?php if($title):?>
                <h1><?= $title;?></h1>
            <?php endif;?>
            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="link-wrap">
                    <a class="link link-white" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
