<?php 

get_header();

$logo = get_field('logo', 'options');

$ids = get_the_ID();

$news = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => array($ids),
]);

$subtitle = get_field('subtitle_sp', 'options');
$title = get_field('title_sp', 'options');

?>

	<section class="home-banner news-banner-inner">

		<?php if(has_post_thumbnail()):?>
			<div class="bg">
				<img src="<?php the_post_thumbnail_url();?>" alt="<?= strip_tags(get_the_title());?>" class="bg-img">
			</div>
		<?php endif;?>
		<div class="content-width">
			<?php if($logo):?>
				<div class="logo-head">
					<img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
				</div>
			<?php endif;?>
			<div class="content" data-aos="fade-up" data-aos-delay="3000" data-aos-duration="1000">
				<div class="text">
					<ul class="breadcrumb">
						<li><a href="<?= get_permalink(125);?>"><?= get_the_title(125);?></a><span>/</span> </li>
						<li><?php the_title();?></li>
					</ul>
					<h1><?php the_title();?></h1>
					<p class="date"><?php the_time('d.m.y');?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="text-default">
		<div class="content-width">
			<div class="content">

				<?php the_content();?>

			</div>
		</div>
	</section>

    <?php if($news->have_posts()):?>

        <section class="news">
            <div class="content-width" data-aos="fade-up" data-aos-duration="1000">
                <?php if($subtitle):?>
                    <h6 class="label"><?= $subtitle;?></h6>
                <?php endif;?>
                <?php if($title):?>
                    <h2 class="title title-black-2"><?= $title;?></h2>
                <?php endif;?>
                <div class="content">

                    <?php while($news->have_posts()): $news->the_post();

                        get_template_part('parts/news');

                    endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </section>

    <?php endif;?>

<?php get_footer();