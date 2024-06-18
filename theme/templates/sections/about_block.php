<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$title_brands = get_sub_field('title_brands');
$brands = get_sub_field('brands');

?>

<section class="about">
    <div class="content-width">
        <div class="title-wrap" data-aos="fade-up" data-aos-duration="1000">
            <?php if($subtitle):?>
                <h6 class="label"><?= $subtitle;?></h6>
            <?php endif;?>
            <?php if($title):?>
                <h2 class="title title-black-1"><?= $title;?></h2>
            <?php endif;?>
        </div>

        <?php if($text):?>
            <div class="text" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <p><?= $text;?></p>
            </div>
        <?php endif;?>

        <div class="logo-wrap" >
            <?php if($title_brands):?>
                <p><?= $title_brands;?></p>
            <?php endif;?>
            <?php if($brands):?>
            <div class='marquee marquee1'>

                <?php for($i=1; $i<=2; $i++):
                    foreach( $brands as $im ): ?>
                        <div class="item"><img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>"></div>
                    <?php endforeach;?>
                <?php endfor;?>
            </div>
            <?php endif;?>
        </div>
    </div>

</section>
