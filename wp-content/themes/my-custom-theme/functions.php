<?php
function my_custom_theme_setup() {
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'my-custom-theme'),
        )
    );
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

function my_custom_theme_styles() {
    wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_styles');

function is_vite_running($host = 'localhost', $port = 5173) {
    $connection = @fsockopen($host, $port);
    if (is_resource($connection)) {
        fclose($connection);
        return true;
    }
    return false;
}

function my_custom_theme_scripts() {
    $jquery_cdn = 'https://code.jquery.com/jquery-3.6.4.min.js';
    $slick_css_cdn = 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css';
    $slick_js_cdn = 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js';

    $slick_theme_css_cdn = 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css';

    wp_enqueue_style('slick-css', $slick_css_cdn, [], null);
    wp_enqueue_style('slick-theme-css', $slick_theme_css_cdn, ['slick-css'], null);

    // jQuery
    wp_enqueue_script('jquery-cdn', $jquery_cdn, [], null, true);

    // Slick CSS
    wp_enqueue_style('slick-css', $slick_css_cdn, [], null);
    wp_enqueue_style('slick-theme-css', $slick_theme_css_cdn, ['slick-css'], null);

    // Slick JS
    wp_enqueue_script('slick-js', $slick_js_cdn, ['jquery-cdn'], null, true);

    if (is_vite_running()) {
        // Inject Vite HMR client for hot reloads
        add_action('wp_footer', function () {
            // Vite HMR Client
            echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
            // Vite main script
            echo '<script type="module" src="http://localhost:5173/src/js/index.js"></script>';
        });
    } else {
        // Production build
        wp_enqueue_script(
            'theme-js',
            get_template_directory_uri() . '/dist/bundle.js',
            ['jquery-cdn', 'slick-js'], // depend on jQuery CDN
            filemtime(get_template_directory() . '/dist/bundle.js'),
            true
        );

        // Enqueue built CSS
        $css_file = get_template_directory() . '/dist/bundle.css';
        if (file_exists($css_file)) {
            wp_enqueue_style(
                'theme-css',
                get_template_directory_uri() . '/dist/bundle.css',
                [],
                filemtime($css_file)
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');


// add_action('wp_head', 'page_loader_inline_styles', 0); // priority 0 = very early
function page_loader_inline_styles() {
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body.loading {
            overflow: hidden;
            background-color: #f5f3e8;
            z-index: -1;
        }
        #loading-container {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background-color: #f5f3e8; /* fallback color */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #loading-count {
            font-family: "Archivo", sans-serif;
            font-weight: 900;
            font-size: 128px;
            color: #381c14;
        }
    </style>
    <?php
}

// add_action('wp_body_open', 'inject_page_loader');
function inject_page_loader() {
    ?>
    <div id="loading-container" class="bg-secondary h-screen w-screen fixed z-[9999]">
        <div class="flex justify-center items-center h-full">
            <h1 class="text-primary text-9xl font-extrabold">
                <span id="loading-count"></span>
            </h1>
        </div>
    </div>
    <?php
}

// add_action('wp_enqueue_scripts', 'enqueue_page_loader_script');
function enqueue_page_loader_script() {
    wp_enqueue_script(
        'page-loader',
        get_template_directory_uri() . '/src/js/page-loader.js',
        [],
        false,
        true // load in footer
    );
}



add_filter( 'woocommerce_loop_add_to_cart_args', 'override_shop_loop_add_to_cart_button_class' );
function override_shop_loop_add_to_cart_button_class( $args ) {
    // override/customize class name -> add-to-cart button in shop page
    $args['class'] = 'btn-primary rounded-none text-center';
    return $args;
}

add_filter( 'woocommerce_template_single_add_to_cart', 'override_woocommerce_grouped_add_to_cart');
function override_woocommerce_grouped_add_to_cart( $args ) {
    // override/customize class name -> add-to-cart button in single product page
    $args['class'] = 'btn-primary rounded-none';
    return $args;
}