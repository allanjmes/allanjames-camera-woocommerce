<?php get_header(); ?>

<section class="max-w-7xl xl:mx-auto">
    <div class="mt-10 mb-15 px-5 lg:px-0">
        <h1 class="text-7xl text-primary text-center font-bold mb-10">Checkout</h1>
        <?php echo do_shortcode('[woocommerce_checkout]'); ?>

    </div>
</section>

<?php get_footer(); ?>