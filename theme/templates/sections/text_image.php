<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$text = get_sub_field('text');
$img1 = get_sub_field('image_1');
$img2 = get_sub_field('image_2');
$bg = get_sub_field('bg');

?>

<section class="img-text-white<?= $bg?'':' bg-black';?>">
    <div class="content-width">
        <div class="top">
            <div class="title-wrap">
                <?php if($subtitle):?>
                    <h6 class="label"><?= $subtitle;?></h6>
                <?php endif;?>
                <?php if($title):?>
                    <h3 class="title-h3 "><?= $title;?></h3>
                <?php endif;?>
            </div>
            <?php if($text):?>
                <div class="text">
                    <p><?= $text;?></p>
                </div>
            <?php endif;?>
        </div>

        <div class="content">
            <div class="bg">
                <img src="<?= get_template_directory_uri();?>/img/bg-5.png" alt="">
            </div>
            <div class="wrap">
                <?php if($img1):?>
                    <figure class="img img-1 rellax" data-rellax-speed="1.5">
                        <img src="<?= $img1['url'];?>" alt="<?= $img1['alt'];?>">
                    </figure>
                <?php endif;?>
                <?php if($img1):?>
                    <figure class="img img-2 rellax" data-rellax-speed="1">
                        <img src="<?= $img2['url'];?>" alt="<?= $img2['alt'];?>">
                    </figure>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
