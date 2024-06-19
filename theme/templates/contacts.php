<?php
/*
 *
 Template Name: Contacts

*/

get_header();

$form = get_field('form_id');

?>

<section class="contact">
    <div class="content-width">
        <div class="bg">
            <img src="<?= get_template_directory_uri();?>/img/after-4.png" alt="">
        </div>
        <div class="content">
            <div class="text">

                <?php the_content();?>

            </div>
            <?php if($form):?>

                <div class="form-wrap form-step">

                    <?= do_shortcode('[contact-form-7 id="'.$form.'"]');?>

                </div>

            <?php endif;?>
        </div>
    </div>
</section>

<?php get_footer();
