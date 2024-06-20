<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$table = get_sub_field('table');

?>

<section class="service-table-wrap">
    <div class="content-width">
        <div class="top">
            <div class="title-wrap">
                <?php if($subtitle):?>
                    <h6 class="label"><?= $subtitle;?></h6>
                <?php endif;?>
                <?php if($title):?>
                    <h2 class="title title-black-1"><?= $title;?></h2>
                <?php endif;?>
            </div>
            <?php if($text):?>
                <div class="text">
                    <p><?= $text;?></p>
                </div>
            <?php endif;?>
        </div>

        <?php if($table):?>
            <div class="table">
                <div class="table-row table-head">
                    <div class="data data1"><?php the_sub_field('head_column_1');?></div>
                    <div class="data data2"><?php the_sub_field('head_column_2');?></div>
                    <div class="data data3"><?php the_sub_field('head_column_3');?></div>
                    <div class="data data4"><?php the_sub_field('head_column_4');?></div>
                    <div class="data data5"><?php the_sub_field('head_column_5');?></div>
                </div>
                <?php foreach($table as $tr):?>
                    <div class="table-row">
                        <div class="data data1"><?= $tr['column_1'];?></div>
                        <div class="data data2" data-head="Section 1"><i class="fa-sharp fa-solid fa-circle-<?= $tr['column_2']?'check':'xmark';?>"></i></div>
                        <div class="data data3" data-head="Section 2"><i class="fa-sharp fa-solid fa-circle-<?= $tr['column_3']?'check':'xmark';?>"></i></div>
                        <div class="data data4" data-head="Section 3"><i class="fa-sharp fa-solid fa-circle-<?= $tr['column_4']?'check':'xmark';?>"></i></div>
                        <div class="data data5" data-head="Section 4"><i class="fa-sharp fa-solid fa-circle-<?= $tr['column_5']?'check':'xmark';?>"></i></div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</section>
