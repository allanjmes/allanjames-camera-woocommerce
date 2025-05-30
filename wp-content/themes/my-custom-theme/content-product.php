<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class('p-4 hover:shadow hover:bg-yellow flex flex-col text-primary dark:hover:text-secondary border border-primary', $product); ?>>
    <a href="<?php the_permalink(); ?>" class="mb-2">
        <?php echo $product->get_image('woocommerce_thumbnail', ['class' => 'rounded-lg mb-2 w-full h-auto transition-transform duration-400 ease-in-out hover:scale-115']); ?>
        <h2 class="text-lg font-semibold ms-2"><?php the_title(); ?></h2>
        <span class="font-bold ms-2"><?php echo $product->get_price_html(); ?></span>
    </a>
    <!-- To override add-to-cart button, check: override_loop_add_to_cart_button_class function in functions.php -->
    <?php woocommerce_template_loop_add_to_cart(); ?>
</li>
