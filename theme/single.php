<?php 

get_header();

$logo = get_field('logo', 'options');

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
						<li><a href="index.html">News</a><span>/</span> </li>
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

	<section class="news" >
		<div class="content-width" data-aos="fade-up" data-aos-duration="1000">
			<h6 class="label">News</h6>
			<h2 class="title title-black-2">Insights & industry news</h2>
			<div class="content">
				<div class="item">
					<div class="wrap">
						<div class="title-wrap">
							<h6 class="title-item">Best smart wearables of 2023</h6>
							<p class="date">10.03.24</p>
						</div>
						<div class="text-wrap">
							<p>Lorem ipsum dolor sit amet consectetur. Sagittis aenean quis nulla volutpat molestie sed senectus. Vel amet sed ultricies quam id.</p>
						</div>
						<div class="link-wrap">
							<a href="#" class="link">Read more</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="wrap">
						<div class="title-wrap">
							<h6 class="title-item">Gadget review: Release of new Airy Pods</h6>
							<p class="date">10.03.24</p>
						</div>
						<div class="text-wrap">
							<p>Lorem ipsum dolor sit amet consectetur. Sagittis aenean quis nulla volutpat molestie sed senectus. Vel amet sed ultricies quam id.</p>
						</div>
						<div class="link-wrap">
							<a href="#" class="link">Read more</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="wrap">
						<div class="title-wrap">
							<h6 class="title-item">Long term benefits of clean energy sources</h6>
							<p class="date">10.03.24</p>
						</div>
						<div class="text-wrap">
							<p>Lorem ipsum dolor sit amet consectetur. Sagittis aenean quis nulla volutpat molestie sed senectus. Vel amet sed ultricies quam id.</p>
						</div>
						<div class="link-wrap">
							<a href="#" class="link">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 

get_footer();

?>