<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$form = get_sub_field('form');

?>

<section class="form-section">
    <div class="content-width">
        <div class="content" data-aos="fade-up" data-aos-duration="1000">
            <?php if($title):?>
                <h2 class="title title-white-2"><?= $title;?></h2>
            <?php endif;?>
            <?php if($subtitle):?>
                <p><?= $subtitle;?></p>
            <?php endif;?>
            <?php if($form):?>
                <div class="form-wrap">
                    <?= do_shortcode('[contact-form-7 id="'.$form.'"]');?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
