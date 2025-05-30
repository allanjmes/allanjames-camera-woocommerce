<?php
/* Template Name: Custom Cart Page */
get_header();
?>

<section class="max-w-7xl xl:mx-auto">
    <div class="mt-10 mb-15">
        <h1 class="text-7xl text-primary text-center font-bold mb-10">Cart</h1>
        <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div>
</section>

<?php get_footer(); ?>