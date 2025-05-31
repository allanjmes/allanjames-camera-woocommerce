    <!-- HERO -->
    <section class="max-w-7xl xl:mx-auto">
        <div class="flex justify-center">
            <h1 class="text-6xl text-center md:text-8xl lg:text-9xl font-semibold tracking-thin bg-gradient-to-r from-primary via-warning to-accent bg-clip-text text-transparent leading-normal">
                <span class="font-anuphan">Fujifilm</span> GFX 100S
            </h1>
        </div>
        <div class="hidden lg:block my-10"></div>
        <div class="bg-primary">
            <div class="grid grid-cols-1 lg:grid-cols-7">
                <div class="col-span-1 lg:col-span-2 flex flex-col justify-center items-center lg:items-start gap-10 lg:ms-10">
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
                <div class="col-span-2 lg:col-span-3 relative lg:-top-30 flex flex-col justify-center">
                    <img
                        src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera.png'; ?>"
                        class="relative scale-60 lg:scale-70"
                        alt=""
                    >
                    <div class="flex justify-center">
                        <div class="w-90">
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
                                                    <img
                                                        src="<?php echo wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>"
                                                        width="auto"
                                                        height="100px"
                                                        class=""
                                                        alt="<?php the_title(); ?>"
                                                    >
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
                <div class="col-span-1 lg:col-span-2 flex flex-col justify-around gap-5 lg:gap-10 lg:me-10 py-10">
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
                    <div class="border border-secondary h-full w-full flex flex-col justify-around">
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
    <!-- WHO WE ARE -->
    <section class="max-w-7xl xl:mx-auto block relative">
        <div class="my-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-5 lg:gap-y-10 pb-15 lg:pb-0">
                <h1 class="text-6xl lg:text-8xl col-span-1 text-primary text-center lg:text-left self-center">Who We are</h1>
                <div class="flex flex-col lg:flex-row col-span-2 items-center">
                    <p class="text-2xl ms-10 me-5 text-gray-500">We believe that every photograph tells a story, and every story deserves to be captured with precision, clarity, and soul. Founded by a team of passionate photographers and engineers</p>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="hidden lg:block fill-gray-300
                            h-auto lg:w-[200px]"
                        viewBox="0 0 32 32"
                        >
                        <path d="M27.719 5.109c-0.135-0.141-0.266-0.286-0.401-0.422-0.141-0.141-0.281-0.271-0.427-0.401-2.953-2.766-6.849-4.297-10.891-4.286-4.245-0.010-8.318 1.677-11.313 4.688-6.104 6.099-6.234 15.938-0.401 22.203 0.13 0.146 0.26 0.286 0.396 0.427 0.141 0.135 0.281 0.266 0.422 0.401 2.958 2.76 6.854 4.292 10.896 4.281 4.276 0 8.292-1.661 11.318-4.682 6.099-6.104 6.229-15.943 0.401-22.208zM5.51 5.51c2.776-2.792 6.552-4.354 10.49-4.344 3.766 0 7.318 1.396 10.068 3.943l-1.333 1.339c-2.385-2.188-5.5-3.401-8.734-3.391-3.438-0.010-6.729 1.354-9.151 3.792-2.438 2.422-3.802 5.719-3.792 9.151 0 3.266 1.198 6.339 3.391 8.734l-1.339 1.333c-5.375-5.813-5.245-14.911 0.401-20.557zM23.906 7.266v0.005l-1.354 1.354c-1.797-1.62-4.135-2.51-6.552-2.505-2.62-0.010-5.135 1.036-6.984 2.896-1.859 1.844-2.901 4.365-2.896 6.984-0.005 2.417 0.885 4.75 2.5 6.552l-1.349 1.354c-1.969-2.161-3.057-4.984-3.047-7.906-0.010-3.125 1.234-6.125 3.448-8.328 2.203-2.214 5.203-3.458 8.328-3.448 2.953 0 5.734 1.078 7.906 3.042zM24.714 16c0 2.328-0.906 4.516-2.552 6.161s-3.833 2.557-6.161 2.557c-2.109 0-4.146-0.771-5.729-2.161v-0.005c-0.146-0.125-0.292-0.25-0.432-0.391-0.135-0.141-0.266-0.286-0.391-0.432-1.396-1.583-2.167-3.62-2.161-5.729 0-2.328 0.906-4.516 2.552-6.161 1.63-1.641 3.849-2.557 6.161-2.552 2.13 0 4.141 0.766 5.729 2.161 0.146 0.125 0.297 0.25 0.432 0.391 0.141 0.141 0.266 0.286 0.391 0.432 1.396 1.583 2.167 3.62 2.161 5.729zM9.448 23.38c1.797 1.615 4.135 2.505 6.552 2.505 2.625 0.005 5.141-1.036 6.984-2.901 1.859-1.849 2.906-4.365 2.896-6.984 0.005-2.417-0.885-4.75-2.5-6.552l1.354-1.354c1.964 2.161 3.052 4.984 3.047 7.906 0.005 3.125-1.234 6.125-3.453 8.328-2.203 2.219-5.203 3.458-8.328 3.453-2.922 0.005-5.745-1.083-7.906-3.047zM26.49 26.49c-2.776 2.792-6.552 4.354-10.49 4.344-3.734 0.010-7.333-1.401-10.068-3.943l1.339-1.333c2.38 2.188 5.5 3.396 8.734 3.391 3.432 0.005 6.729-1.359 9.151-3.797 2.432-2.422 3.802-5.719 3.792-9.151 0.005-3.234-1.203-6.349-3.391-8.729l1.333-1.339c5.375 5.813 5.245 14.911-0.401 20.557z"/>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-rows-none lg:grid-cols-3 gap-10">
                <div class="hidden lg:block col-span-1 flex justify-start relative">
                    <svg class="fill-accent w-24 h-auto transform scale-200 rotate-45 lg:ms-15" viewBox="0 0 100 100" width="100px" height="100px">
                        <path d="M0,50 a1,1 0 0,0 100,0"/>
                    </svg>
                    <?php get_template_part('template/components/star-icon', null, [
                        'class' => 'bg-gray-100 h-20 w-20 relative lg:top-15 lg:-left-10',
                        'svg_class' => 'stroke-black fill-black h-[45px] w-auto'
                    ]); ?>
                </div>
                <div class="bg-warning col-span-2 h-40 lg:h-60 flex justify-center relative">
                    <img
                        src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                        class="transform scale-230 lg:scale-260 relative lg:top-5"
                        alt=""
                    >
                </div>
            </div>
        </div>
    </section>
    <!-- EXCLUSIVE -->
    <section class="max-w-7xl xl:mx-auto my-20">
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
                                <div class="row-span-1 col-span-1 flex justify-start items-end ps-5">
                                    <h1><?php echo $product->get_price_html(); ?></h1>
                                </div>
                                <div class="lg:col-span-2 flex justify-center items-center h-30 lg:h-100">
                                    <a href="<?php the_permalink(); ?>">
                                        <img
                                            src="<?php echo wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>"
                                            class="transform scale-40 lg:scale-70"
                                            alt="<?php the_title(); ?>"
                                        >
                                    </a>
                                </div>
                                <div class="row-span-1 col-span-1 flex justify-end items-end pe-5">
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

    <section class="bg-primary max-w-7xl xl:mx-auto">
        <div class="p-10">
            <div class="relative">
                <!-- Top-left Image -->
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/retro-camera.webp'; ?>"
                    class="hidden md:block absolute top-0 left-0 w-32 lg:w-55 h-auto"
                    alt="Retro Camera Left"
                >
    
                <!-- Bottom-right or mid-right Image -->
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/female-colorful.webp'; ?>"
                    class="hidden md:block absolute top-15 right-0 w-32 lg:w-60 h-auto"
                    alt="Retro Camera Right"
                >
    
                <!-- Centered Text -->
                <div class="flex justify-center items-center">
                    <div class="w-90 lg:w-full">
                        <h1 class="text-6xl lg:text-9xl text-secondary text-center px-4 font-semibold">
                            Explore
                        </h1>
                        <h1 class="text-6xl lg:text-9xl text-secondary text-center px-4 font-semibold">
                            Our
                        </h1>
                        <h1 class="text-6xl lg:text-9xl text-secondary text-center px-4 font-semibold">
                            Gallery
                        </h1>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-20 pt-10">
                <div class="col-span-1">
                    <div class="flex justify-end">
                        <img
                            src="<?php echo get_template_directory_uri() . '/src/assets/home/man-with-camera.webp'; ?>"
                            class="lg:w-80 h-auto"
                            alt="Retro Camera Right"
                        >
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex flex-col lg:flex-row justify-between items-center gap-5 lg:mt-5">
                        <p class="text-secondary text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam et eos corrupti ipsum est harum!</p>
                        <a class="btn-accent w-[250px] flex gap-2 justify-center items-center" href="<?php echo site_url() . '/shop/'; ?>">
                            Explore Gallery
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
            </div>
        </div>
    </section>
    <!-- PRODUCT DETAILS -->
    <section class="max-w-7xl xl:mx-auto">
        <div class="my-20 flex flex-col justify-center items-center font-semibold">
            <h1 class="text-6xl lg:text-8xl col-span-1 text-primary lg:mx-10">Our Product</h1>
            <h1 class="text-6xl lg:text-8xl col-span-1 text-primary lg:mx-10">Details</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-[200px_200px_200px] gap-4 px-5 lg:px-0">
            <!-- Left Large Image -->
            <div class="md:row-span-3 bg-gray-100 flex items-center justify-center overflow-hidden">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera.webp'; ?>"
                    alt="Videoing Lens"
                    class="w-auto h-[300px] md:h-full md:max-h-[450px] object-contain"
                >
            </div>

            <!-- Top Right Image -->
            <div class="md:row-span-2 bg-gray-100 flex items-center justify-center overflow-hidden">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                    alt="Film Lens"
                    class="h-auto w-[400px] md:w-full md:max-w-[500px] object-contain"
                >
            </div>

            <!-- Bottom Right Image -->
            <div class="md:row-span-1 bg-gray-100 flex items-center justify-center overflow-hidden">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera-front.webp'; ?>"
                    alt="Another Lens"
                    class="h-auto w-[220px] md:w-full md:max-w-[250px] object-contain"
                >
            </div>
        </div>


    </section>
    <!-- CRAFTED FOR CREATIVES -->
    <section class="max-w-7xl xl:mx-auto">
        <div class="mt-10 lg:mb-10 lg:pb-5 border-b border-gray-500">
            <div class="mt-20 mb-5 lg:mb-20 flex flex-col justify-center items-center text-center font-semibold">
                <h1 class="text-6xl lg:text-8xl col-span-1 text-primary lg:mx-10">Crafted for Creatives</h1>
                <h1 class="text-6xl lg:text-8xl col-span-1 text-primary lg:mx-10">your lens to the world</h1>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-10 py-10 px-5 lg:px-0">
            <!-- Left Column -->
            <div class="flex-1 h-100">
                <div class="bg-warning h-full min-h-[400px] relative overflow-hidden">
                    <div class="relative w-full h-full">
                        <h1 class="hidden lg:block text-6xl lg:text-8xl font-extrabold text-gray-300 z-10 absolute lg:-bottom-10 lg:-right-3">
                            Power
                        </h1>
                    </div>
                    <!-- Desktop image -->
                    <img
                        src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera-front.webp'; ?>"
                        class="hidden lg:block absolute top-0 left-0 right-0 mx-auto z-20 h-full object-contain"
                        alt=""
                    >
                    <!-- Mobile image -->
                    <img
                        src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera-front.webp'; ?>"
                        class="lg:hidden absolute top-0 left-0 right-0 mx-auto z-20 h-full object-contain"
                        alt=""
                    >
                </div>
            </div>
            <!-- Right Column -->
            <div class="flex-1 h-100">
                <!-- Accordion -->
                <div class="join join-vertical bg-base-100 h-full">
                    <div class="collapse collapse-creatives collapse-arrow join-item border-b border-gray-500 rounded-none dark:text-primary">
                        <input type="radio" name="my-accordion-4" checked="checked" />
                        <div class="collapse-title">
                            <h1 class="font-semibold text-3xl text-primary">Precision and Clarity</h1>
                        </div>
                        <div class="collapse-content text-sm flex flex-col gap-5">
                            <div class="flex justify-between items-center gap-5">
                                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis conse ipsam ipsa deleniti suscipit eos.</p>
                                <div class="bg-primary h-full w-auto">
                                    <img
                                        src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                                        class="w-45 h-auto"
                                        alt=""
                                    >
                                </div>
                            </div>
                            <a class="btn-accent w-[200px] flex gap-2 justify-center items-center" href="<?php echo site_url() . '/product-category/camera/'; ?>">
                                Learn More
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
                    <div class="collapse collapse-creatives collapse-arrow join-item border-b border-gray-500 rounded-none dark:text-primary">
                        <input type="radio" name="my-accordion-4" />
                        <div class="collapse-title">
                            <h1 class="font-semibold text-3xl text-primary">Dynamic Range</h1>
                        </div>
                        <div class="collapse-content text-sm flex flex-col gap-5">
                            <div class="flex justify-between items-center gap-5">
                                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis conse ipsam ipsa deleniti suscipit eos.</p>
                                <div class="bg-primary h-full w-auto">
                                    <img
                                        src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                                        class="w-45 h-auto"
                                        alt=""
                                    >
                                </div>
                            </div>
                            <a class="btn-accent w-[200px] flex gap-2 justify-center items-center" href="<?php echo site_url() . '/product-category/video-camera/'; ?>">
                                Learn More
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
                    <div class="collapse collapse-creatives collapse-arrow join-item border-b border-gray-500 rounded-none dark:text-primary">
                        <input type="radio" name="my-accordion-4" />
                        <div class="collapse-title">
                            <h1 class="font-semibold text-3xl text-primary">Speed <span class="font-anuphan">&</span> Performance</h1>
                        </div>
                        <div class="collapse-content text-sm flex flex-col gap-5">
                            <div class="flex justify-between items-center gap-5">
                                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis conse ipsam ipsa deleniti suscipit eos.</p>
                                <div class="bg-primary h-full w-auto">
                                    <img
                                        src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                                        class="w-45 h-auto"
                                        alt=""
                                    >
                                </div>
                            </div>
                            <a class="btn-accent w-[200px] flex gap-2 justify-center items-center" href="<?php echo site_url() . '/product-category/camera/'; ?>">
                                Learn More
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
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTER -->
    <section class="max-w-7xl mx-auto bg-gray-100 lg:mt-10 lg:mb-5 px-5">
        <div class="relative p-10 flex flex-col-reverse md:flex-row items-center md:items-start gap-10 md:gap-0 overflow-hidden">
            
            <!-- Text Column -->
            <div class="w-full md:w-4/7 flex flex-col gap-6 z-10">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl text-primary leading-tight font-semibold">
                    Subscribe to our Newsletter
                </h1>
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error harum nam modi ipsa doloribus deserunt!
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input
                        type="email"
                        placeholder="Enter your email"
                        class="bg-secondary rounded-full px-4 py-2
                            invalid:border-accent invalid:text-accent focus:border-primary
                            focus:outline focus:outline-primary focus:invalid:border-accent focus:invalid:outline-accent"
                    />
                    <button class="btn-accent w-full sm:w-auto">Subscribe</button>
                </div>
            </div>

            <!-- Image Column -->
            <div class="w-full md:w-3/7 flex justify-center md:justify-end relative">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                    class="w-[250px] sm:w-[300px] md:w-[350px] lg:w-[400px] object-contain transform scale-100"
                    alt=""
                >
            </div>
        </div>
    </section>