<?php get_header(); ?>
<?php echo do_shortcode('[metaslider id="20"]'); ?>

<div id="logo-carousel-section"><?php echo do_shortcode('[logo-slider]'); ?></div>

<div class="content homepage-content">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>