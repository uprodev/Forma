<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image = get_sub_field('image');
$numbers = get_sub_field('numbers');

?>

<section class="img-3d">
    <div class="content-width">
        <div class="title-wrap">
            <?php if($title):?>
                <h2 class="title title-white-2"><?= $title;?></h2>
            <?php endif;?>
            <?php if($subtitle):?>
                <p><?= $subtitle;?></p>
            <?php endif;?>
        </div>
        <div class="content">
            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
            <?php endif;?>
            <?php if($numbers): $n=1;?>
                <div class="text">
                    <?php foreach($numbers as $num):?>
                    <div class="item item-<?= $n;?>">
                        <h6 class="number"><span>0</span><?= $num['sign'];?></h6>
                        <p><?= $num['value'];?></p>
                    </div>
                    <?php $n++; endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
