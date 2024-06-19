<?php

$logo = get_field('footer_logo', 'options');
$title1 = get_field('title_menu_1', 'options');
$title2 = get_field('title_menu_2', 'options');
$socn = get_field('soc_networks', 'options');
$copyright = get_field('copyright', 'options');

?>

</main>

<footer>
    <div class="content-width">
        <div class="logo-wrap">
            <?php if($logo):?>
                <a href="<?= get_home_url();?>">
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                </a>
            <?php endif;?>
        </div>
        <nav class="footer-menu">
            <div class="item">
                <?php if($title1):?>
                    <h6><?= $title1;?></h6>
                <?php endif;?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu1',
                    'container' => false,
                    'menu_class' => '',
                ]);?>
            </div>
            <div class="item">
                <?php if($title2):?>
                    <h6><?= $title2;?></h6>
                <?php endif;?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu2',
                    'container' => false,
                    'menu_class' => '',
                ]);?>
            </div>
        </nav>
        <?php if($socn):?>
            <div class="soc-wrap">
                <ul class="soc-list">
                    <?php foreach($socn as $soc):?>
                        <li><a href="<?= $soc['url'];?>" target="_blank"><img src="<?= $soc['icon']['url'];?>" alt="<?= $soc['icon']['alt'];?>"></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php endif;?>
        <div class="bottom">
            <div class="left">
                <?php if($copyright):?>
                    <p><?= $copyright;?></p>
                <?php endif;?>
            </div>
            <div class="right">
                <?php wp_nav_menu([
                    'theme_location' => 'footer-bottom',
                    'container' => false,
                    'menu_class' => '',
                ]);?>
            </div>
        </div>
    </div>
</footer>

  <?php wp_footer(); ?>
	</body>
</html>
