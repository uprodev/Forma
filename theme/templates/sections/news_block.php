<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$news = get_sub_field('news');

?>

<section class="news" >
    <div class="content-width" data-aos="fade-up" data-aos-duration="1000">
        <?php if($subtitle):?>
            <h6 class="label"><?= $subtitle;?></h6>
        <?php endif;?>
        <?php if($title):?>
            <h2 class="title title-black-2"><?= $title;?></h2>
        <?php endif;?>
        <?php if( $news ): ?>
            <div class="content">
                <?php foreach( $news as $post): setup_postdata($post);

                    get_template_part('parts/news');

                endforeach; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
