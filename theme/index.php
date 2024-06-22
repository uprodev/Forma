<?php

get_header();


$terms = get_terms( [
    'taxonomy' => 'category',
    'hide_empty' => false,
    'exclude' => 1,
]);

$first = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
]);

while($first->have_posts()): $first->the_post();

$im = get_field('card_image');
?>

    <section class="news-banner">
        <div class="content-width">
            <div class="bg">
                <img src="<?= get_template_directory_uri();?>/img/after-3.png" alt="">
            </div>
            <div class="content">
                <div class="text">
                    <h1><?php the_title();?></h1>
                    <p class="date"><?php the_time('d.m.y');?></p>
                    <div class="text-wrap">
                        <?php the_excerpt();?>
                    </div>
                    <div class="link-wrap">
                        <a href="<?php the_permalink();?>" class="link"><?= __('Read more', 'forma');?></a>
                    </div>
                </div>
                <figure>
                    <img src="<?= $im?$im:get_the_post_thumbnail_url();?>" alt="">
                </figure>
            </div>
        </div>
    </section>
<?php endwhile; wp_reset_postdata();?>


<?php $wp_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 15,
//    'offset' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
]);?>
    <section class="news-block news">
        <div class="content-width">
            <div class="filter-line">
                <div class="wrap">
                    <p><?= __('Filter by:', 'forma');?></p>
                    <form action="#" class="form-filter">
                        <?php foreach($terms as $term):?>
                            <div class="input-wrap">
                                <input type="checkbox" class="formFilter" name="filter[]" id="filter<?= $term->term_id;?>" value="<?= $term->term_id;?>">
                                <label for="filter<?= $term->term_id;?>"><?= $term->name;?></label>
                            </div>
                        <?php endforeach;?>
                        <input type="hidden" name="action" value="filter">
                    </form>

                </div>
            </div>
            <div class="content ajax-post">
                <?php while($wp_query->have_posts()): $wp_query->the_post();

                    get_template_part('parts/news');

                endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

<?php get_footer();
