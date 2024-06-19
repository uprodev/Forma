<div class="item">
    <div class="wrap">
        <div class="title-wrap">
            <h6 class="title-item"><?php the_title();?></h6>
            <p class="date"><?php the_time('d.m.y');?></p>
        </div>
        <div class="text-wrap">
            <?php the_excerpt();?>
        </div>
        <div class="link-wrap">
            <a href="<?php the_permalink();?>" class="link"><?= __('Read more', 'forma');?></a>
        </div>
    </div>
</div>