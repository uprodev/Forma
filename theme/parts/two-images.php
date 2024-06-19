<?php

/**
 * Two Images
 *

 **/

$img1 = get_field( 'image_1' );
$img2 = get_field( 'image_2' );

?>

<figure>
    <img src="<?= $img1['url'];?>" alt="<?= $img1['alt'];?>">
    <img src="<?= $img2['url'];?>" alt="<?= $img2['alt'];?>">
</figure>
