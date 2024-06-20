<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$services = get_sub_field('services');
$count = get_sub_field('count_items');

?>

<section class="services<?= $count?' services-4x':'';?> black">
    <div class="content-width">
        <div class="title-wrap">
            <?php if($subtitle):?>
                <h6 class="label"><?= $subtitle;?></h6>
            <?php endif;?>
            <?php if($title):?>
                <h2 class="title title-white-2"><?= $title;?></h2>
            <?php endif;?>
        </div>
        <div class="content">
            <div class="bg">
                <img src="<?= get_template_directory_uri();?>/img/bg-2.png" alt="">
            </div>

            <?php if($services):?>
                <div class="wrap rellax" data-rellax-speed="2">
                    <?php foreach($services as $serv):
                        $title = $serv['title'];
                        $text = $serv['text'];
                        $image = $serv['image'];
                        $link = $serv['link'];
                        if( $link ){
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        }
                        ?>

                        <div class="item">
                            <figure>
                                <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                    <?php if($image):?>
                                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                                    <?php endif;?>
                                </a>
                            </figure>
                            <div class="text">
                                <?php if($title):?>
                                    <h6><?= $title;?></h6>
                                <?php endif;?>
                                <?php if($text):?>
                                    <p><?= $text;?></p>
                                <?php endif;?>
                                <div class="link-wrap">
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="link"><?= esc_html($link_title); ?></a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
