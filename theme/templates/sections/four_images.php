<?php

$title = get_sub_field('title');
$img1 = get_sub_field('image_1');
$img2 = get_sub_field('image_2');
$img3 = get_sub_field('image_3');
$img4 = get_sub_field('image_4');

?>

<section class="title-img-4x">
    <div class="content-width">
        <div class="title-wrap">
            <div class="bg">
                <img src="<?= get_template_directory_uri();?>/img/bg-7.png" alt="">
            </div>
            <?php if($title):?>
                <h2 class="title title-white-1"><?= $title;?></h2>
            <?php endif;?>
        </div>
        <div class="img-wrap">
            <?php if($img1):?>
                <img src="<?= $img1['url'];?>" alt="<?= $img1['alt'];?>" class="img img-1 rellax" data-rellax-speed="1">
            <?php endif;?>
            <?php if($img2):?>
                <img src="<?= $img2['url'];?>" alt="<?= $img2['alt'];?>" class="img img-2 rellax" data-rellax-speed="0.5">
            <?php endif;?>
            <?php if($img3):?>
                <img src="<?= $img3['url'];?>" alt="<?= $img3['alt'];?>" class="img img-3 rellax" data-rellax-speed="-1">
            <?php endif;?>
            <?php if($img4):?>
                <img src="<?= $img4['url'];?>" alt="<?= $img4['alt'];?>" class="img img-4 rellax" data-rellax-speed="-0.5">
            <?php endif;?>
        </div>
    </div>
</section>
