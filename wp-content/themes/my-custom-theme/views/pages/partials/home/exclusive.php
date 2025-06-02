<!-- EXCLUSIVE -->
<section class="my-20">
    <div class="mt-30 mb-10">
        <h1 class="text-6xl lg:text-8xl col-span-1 text-primary text-center lg:mx-10">Our Exclusive</h1>
        <h1 class="text-6xl lg:text-8xl col-span-1 text-primary text-center lg:mx-10">Camera Just For You</h1>
    </div>
    <div class="flex flex-col gap-5 px-5 lg:px-0">
        <!-- woocommerce product loop -->
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                // 'orderby' => 'date',
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'camera',
                    ),
                ),
            );

            $loop = new WP_Query($args);

            if ($loop->have_posts()) {
                $index = 0;

                while ($loop->have_posts()) :
                $loop->the_post();

                    global $product;
                    ?>
                    <div class="collapse collapse-exclusive collapse-arrow border border-gray-300 rounded-none has-checked:bg-warning dark:text-primary dark:has-checked:text-secondary">
                        <input type="radio" name="my-accordion-1" <?php echo $index === 1 ? 'checked="checked"' : ''; ?> />
                        <div class="collapse-title">
                            <h1 class="font-semibold text-center text-lg lg:text-3xl">Phase One XF IQ4 150MP - <?php the_title(); ?></h1>
                        </div>
                        <div class="collapse-content text-md lg:text-2xl grid grid-cols-1 lg:grid-cols-4">
                            <div class="row-span-1 col-span-1 flex justify-center lg:justify-start items-end lg:ps-5 order-2 lg:order-1">
                                <h1><?php echo $product->get_price_html(); ?></h1>
                            </div>
                            <div class="lg:col-span-2 flex justify-center items-center h-30 lg:h-100 order-1 lg:order-2">
                                <a href="<?php the_permalink(); ?>">
                                    <img
                                        src="<?php echo wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>"
                                        class="transform scale-40 lg:scale-70"
                                        alt="<?php the_title(); ?>"
                                    >
                                </a>
                            </div>
                            <div class="row-span-1 col-span-1 flex justify-center lg:justify-end items-end lg:pe-5 order-3 lg:order-3">
                                <h1>
                                    Category:
                                    <?php
                                        $terms = get_the_terms( get_the_ID(), 'product_cat' );
                                        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                                            $term = $terms[0]; // get first category
                                            $term_link = get_term_link( $term );
                                            if ( !is_wp_error( $term_link ) ) {
                                                echo '<a href="' . esc_url( $term_link ) . '">' . esc_html( $term->name ) . '</a>';
                                            }
                                        } else {
                                            echo 'Uncategorized';
                                        }
                                    ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <?php
                $index++;
                endwhile;
                wp_reset_postdata();
            } else {
                echo '<p>No products found</p>';
            }
            ?>
        <!-- woocommerce product loop -->
    </div>
</section>