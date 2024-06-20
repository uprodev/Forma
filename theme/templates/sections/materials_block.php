<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$materials = get_sub_field('materials');

?>

<section class="materials">
    <div class="content-width">
        <div class="top">
            <?php if($subtitle):?>
                <h6 class="label"><?= $subtitle;?></h6>
            <?php endif;?>
            <?php if($title):?>
                <h2 class="title title-white-2"><?= $title;?></h2>
            <?php endif;?>
        </div>
        <?php if($materials): $m=1;?>
            <div class="content">
                <ul class="accordion">
                    <?php foreach($materials as $mat):?>

                        <li class="accordion-item<?= $m==1?' is-active':'';?>">
                            <div class="accordion-thumb"><p><?= $mat['title'];?></p></div>
                            <div class="accordion-panel">
                                <div class="wrap">
                                    <?php if($mat['text']):?>
                                        <p><?= $mat['text'];?></p>
                                    <?php endif;?>
                                    <?php $link = $mat['link'];

                                    if( $link ):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <div class="link-wrap">
                                            <a class="link" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($mat['image']):?>
                                        <figure>
                                            <img src="<?= $mat['image']['url'];?>" alt="<?= $mat['image']['alt'];?>">
                                        </figure>
                                    <?php endif;?>
                                </div>
                            </div>
                        </li>

                    <?php $m++; endforeach; $m=1;?>
                </ul>
                <div class="img-wrap" data-aos="fade-up" data-aos-duration="1000">
                    <?php foreach($materials as $mat):?>
                        <?php if($mat['image']):?>
                            <figure class="img img-<?= $m;?>">
                                <img src="<?= $mat['image']['url'];?>" alt="<?= $mat['image']['alt'];?>">
                            </figure>
                        <?php endif;?>
                    <?php $m++; endforeach;?>
                </div>
            </div>
        <?php endif;?>
    </div>
</section>
