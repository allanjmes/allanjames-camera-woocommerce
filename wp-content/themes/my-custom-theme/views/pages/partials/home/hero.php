<!-- HERO -->
<section class="">
    <div class="flex justify-center">
        <h1 class="text-7xl text-center md:text-8xl lg:text-9xl font-semibold tracking-thin bg-gradient-to-r from-primary via-warning to-accent bg-clip-text text-transparent leading-normal">
            <span class="font-anuphan">Fujifilm</span> GFX 100S
        </h1>
    </div>
    <div class="hidden lg:block my-10"></div>
    <div class="bg-primary px-5 lg:px-0">
        <div class="grid grid-cols-1 lg:grid-cols-7">
            <div class="order-3 lg:order-1 col-span-1 lg:col-span-2 flex flex-col justify-center items-center lg:items-start gap-5 lg:gap-10 lg:ms-10 pb-10 lg:pb-0">
                <h1 class="text-secondary text-3xl lg:text-5xl font-light text-center lg:text-start pt-10 lg:pt-0">16 mega pixel HD digital camera</h1>
                <div class="flex justify-center gap-3">
                    <a class="btn-accent flex gap-2 items-center" href="<?php echo site_url() . '/shop/'; ?>">
                        Start Shopping
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="10px"
                            height="10px"
                            viewBox="-4.5 0 20 20"
                            version="1.1"
                            class="icon stroke-secondary fill-secondary"
                        >
                            <g id="Page-1" stroke-width="1">
                                <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="order-2 col-span-2 lg:col-span-3 relative lg:-top-30 flex flex-col justify-center">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera.png'; ?>"
                    class="relative scale-70 md:scale-60 lg:scale-70"
                    alt="camera"
                >
                <div class="flex justify-center">
                    <div class="w-70 md:w-100 lg:w-90">
                        <!-- <p class="text-secondary relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, maxime dignissimos ad aut doloremque harum at deleniti saepe temporibus id?</p> -->
                        <div class="multiple-items">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 4,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                );

                                $loop = new WP_Query($args);

                                if ($loop->have_posts()) {

                                    while ($loop->have_posts()) :
                                    $loop->the_post();

                                        global $product;
                                        ?>
                                            <div class="border rounded-xl border-secondary flex justify-center h-full m-2">
                                                <a class="flex justify-center" href="<?php the_permalink(); ?>">
                                                    <img
                                                        src="<?php echo wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>"
                                                        width="auto"
                                                        height="100px"
                                                        class="h-[70px] md:h-[85px] lg:h-[100px]"
                                                        alt="<?php the_title(); ?>"
                                                    >
                                                </a>
                                            </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                } else {
                                    echo '<p>No products found</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-3 col-span-1 lg:col-span-2 flex flex-col justify-around gap-5 lg:gap-10 lg:me-10 py-10">
                <div class="flex flex-col gap-10">
                    <div class="flex flex-row gap-1">
                        <?php for ($i=0; $i < 5; $i++) { ?>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="30px"
                                height="30px"
                                viewBox="0 0 24 24"
                                class="fill-warning stroke-warning"
                            >
                                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"/>
                            </svg>
                        <?php } ?>
                    </div>
                    <p class="text-secondary">"I couldn't be happier with my new Camera. The craftsmanship is impeccable, and every detail reflects quality."</p>
                </div>
                <div class="hidden lg:flex border border-secondary h-full w-full flex-col justify-around">
                    <!-- <h1 class="text-secondary">hello</h1> -->
                    <div class="flex justify-center">
                        <h5 class="text-center text-secondary w-50">Captures sharp images and full HD (1080p) Video</h5>
                    </div>
                    <div class="flex justify-center">
                        <a class="btn-outline-accent w-[200px] flex gap-2 justify-center items-center group/svg-shop" href="<?php echo site_url() . '/product-category/camera/'; ?>">
                            View Shop
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="10px"
                                height="10px"
                                viewBox="-4.5 0 20 20"
                                version="1.1"
                                class="icon stroke-accent fill-accent
                                    group-hover/svg-shop:stroke-secondary group-hover/svg-shop:fill-secondary"
                            >
                                <g id="Page-1" stroke-width="1">
                                    <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>