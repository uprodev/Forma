<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$documents = get_sub_field('documents');

?>

<section class="documents">
    <div class="content-width">
        <div class="top">
            <?php if($subtitle):?>
                <h6 class="label"><?= $subtitle;?></h6>
            <?php endif;?>
            <?php if($title):?>
                <h2 class="title title-white-2"><?= $title;?></h2>
            <?php endif;?>
        </div>
        <?php if($documents):?>
            <div class="content">
                <?php foreach($documents as $doc):
                    $img = $doc['icon'];
                    $title = $doc['title'];
                    $text = $doc['text'];
                    $file = $doc['file'];
                    ?>
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-wrap">
                                <?php if($img):?>
                                    <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                                <?php endif;?>
                            </div>
                            <?php if($title):?>
                                <h6 class="item-title"><?= $title;?></h6>
                            <?php endif;?>
                            <?php if($text):?>
                                <p><?= $text;?></p>
                            <?php endif;?>
                            <div class="link-wrap">
                                <a href="<?= $file['url'];?>" download class="link"><?= __('Download', 'forma');?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</section>
