<?php
    $cart_count = count( WC()->cart->get_cart_contents() );
?>
<header class="mx-5 max-w-7xl xl:mx-auto">
    <div class="py-10 border-b border-gray-500 grid grid-cols-2 md:grid-cols-3">
        <div class="flex gap-2 md:gap-3 lg:gap-5 justify-start items-center">
            <div class="flex gap-2 h-full">
                <!-- Start - Sidebar Drawer -->
                <div class="drawer w-auto h-full">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content w-full h-full flex items-middle">
                        <label for="my-drawer" class="btn-outline-primary h-full py-3 rounded-md md:rounded-xl lg:rounded-full cursor-pointer flex md:flex-col lg:flex-row md:gap-1 lg:gap-2 group/svg-menu">
                            <div class="flex justify-center items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1024 1024"
                                    class="icon fill-primary group-hover/svg-menu:fill-secondary h-[15px] w-[15px] lg:h-[20px] lg:w-[20px]"
                                    version="1.1"
                                >
                                    <path d="M109.632 673.664h519.68c25.152 0 45.568-22.016 45.568-48.896 0-26.88-20.416-48.896-45.568-48.896h-519.68c-25.216 0-45.632 22.016-45.632 48.896 0 26.88 20.48 48.896 45.632 48.896z m0-228.096h519.68c25.152 0 45.568-21.952 45.568-48.896 0-26.88-20.416-48.896-45.568-48.896h-519.68c-25.216 0-45.632 22.016-45.632 48.896 0 26.88 20.48 48.896 45.632 48.896z m3.264-219.904h795.776c26.88 0 50.56-20.352 51.328-47.168A48.896 48.896 0 0 0 911.104 128H115.328c-26.88 0-50.56 20.416-51.328 47.168a48.896 48.896 0 0 0 48.896 50.56z m619.776 447.232V348.672L960 510.784l-227.328 162.112c0 0.768 0 0.768 0 0z m178.432 122.944H115.328c-26.88 0-50.56 20.48-51.328 47.232a48.896 48.896 0 0 0 48.896 50.496h795.776c26.88 0 50.56-20.416 51.328-47.232a48.896 48.896 0 0 0-48.896-50.496z"/>
                                </svg>
                            </div>
                            <span class="hidden lg:block">
                                Menu
                            </span>
                            <span class="hidden md:block lg:hidden text-xs">
                                Menu
                            </span>
                        </label>
                    </div>
                    <div class="drawer-side dark:backdrop-opacity-5">
                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu bg-secondary border-e border-primary text-base-content min-h-full w-70 md:w-90 lg:w-120 px-4 py-0">
                            <div class="py-11 md:py-13 lg:py-11 border-b border-gray-500 flex flex-row-reverse justify-between">
                                <li class="my-auto flex justify-center items-middle">
                                    <button id="close-my-drawer">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="30px"
                                            height="30px"
                                            viewBox="0 0 24 24"
                                            class="stroke-primary"
                                            fill="none"
                                        >
                                            <path class="stroke-primary" d="M9.16998 14.83L14.83 9.17004" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path class="stroke-primary" d="M14.83 14.83L9.16998 9.17004" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path class="stroke-primary" d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </li>
                                <li class="">
                                    <a href="<?php echo site_url(); ?>">
                                        <h1 class="text-2xl sm:text-3xl font-extrabold text-primary leading-none">Logo<span class="text-accent">Here</span></h1>
                                    </a>
                                </li>
                            </div>
                            <div class="flex flex-col gap-2 text-primary">
                                <li class="pt-5">Search</li>
                                <li class="p-0">
                                    <a class="p-0 flex gap-1" href="<?php echo site_url() . '/shop'; ?>">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 25 25"
                                            class="icon p-0
                                                stroke-primary fill-secondary
                                                h-[20px] w-[20px] lg:h-[40px] lg:w-[40px]"
                                        >
                                            <path d="M8.5 10.5H5L6.5 19.5H18.5L20 10.5H16.5M8.5 10.5L10.2721 5.18377C10.4082 4.77543 10.7903 4.5 11.2208 4.5H13.7792C14.2097 4.5 14.5918 4.77543 14.7279 5.18377L16.5 10.5M8.5 10.5H16.5" stroke-width="1.2"/>
                                            <path d="M12.5 10.5V19.5" stroke-width="1.2"/>
                                            <path d="M9.5 19.5L8.5 10.5" stroke-width="1.2"/>
                                            <path d="M15.5 19.5L16.5 10.5" stroke-width="1.2"/>
                                            <path d="M19.5 13.5H5.5" stroke-width="1.2"/>
                                            <path d="M19 16.5H6" stroke-width="1.2"/>
                                        </svg>
                                        Shop
                                    </a>
                                </li>
                                <li>
                                    <label class="p-0">Product Categories</label>
                                    <li><a class="p-0 ms-5" href="<?php echo site_url() . '/product-category/camera/'; ?>">Camera</a></li>
                                    <li><a class="p-0 ms-5" href="<?php echo site_url() . '/product-category/video-camera/'; ?>">Video Camera</a></li>
                                </li>
                                <li class="p-0">
                                    <a class="p-0 flex gap-2" href="<?php echo site_url() . '/cart'; ?>">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20px"
                                            height="20px"
                                            viewBox="0 0 24 24"
                                            class="icon
                                                stroke-primary fill-secondary
                                                h-[20px] w-[20px] lg:h-[30px] lg:w-[30px]"
                                        >
                                            <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <label class="w-auto">Cart</label>
                                        <?php if ( $cart_count ) : ?><div class="badge badge-sm badge-accent"><?php echo $cart_count; ?></div> <?php endif; ?>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <!-- End - Sidebar Drawer -->
                <div class="flex md:hidden rounded-md border border-primary p-1 h-full justify-between items-center">
                    <label class="swap swap-rotate">
                    <!-- this hidden checkbox controls the state -->
                    <input id="toggle-theme-btn-sm" type="checkbox" class="theme-controller" value="synthwave" />

                    <!-- sun icon -->
                    <svg
                        class="swap-off h-10 w-10 fill-primary"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>

                    <!-- moon icon -->
                    <svg
                        class="swap-on h-10 w-10 fill-primary"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>
                    </label>
                </div>
            </div>
            <a type="button" class="btn-outline-primary rounded-xl lg:rounded-full hidden md:flex flex-col lg:flex-row gap-0 md:gap-1 items-center group/svg-shop h-full" href="<?php echo site_url() . '/shop'; ?>">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 25 25"
                    class="icon
                        stroke-primary group-hover/svg-shop:stroke-secondary
                        fill-secondary group-hover/svg-shop:fill-primary h-[20px] w-[20px] lg:h-[30px] lg:w-[30px]"
                >
                    <path d="M8.5 10.5H5L6.5 19.5H18.5L20 10.5H16.5M8.5 10.5L10.2721 5.18377C10.4082 4.77543 10.7903 4.5 11.2208 4.5H13.7792C14.2097 4.5 14.5918 4.77543 14.7279 5.18377L16.5 10.5M8.5 10.5H16.5" stroke-width="1.2"/>
                    <path d="M12.5 10.5V19.5" stroke-width="1.2"/>
                    <path d="M9.5 19.5L8.5 10.5" stroke-width="1.2"/>
                    <path d="M15.5 19.5L16.5 10.5" stroke-width="1.2"/>
                    <path d="M19.5 13.5H5.5" stroke-width="1.2"/>
                    <path d="M19 16.5H6" stroke-width="1.2"/>
                </svg>
                <span class="hidden lg:block">
                    Shop
                </span>
                <span class="lg:hidden text-xs">
                    Shop
                </span>
            </a>
            <button class="btn-outline-primary hidden lg:flex items-center gap-1 group/svg-search h-full">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20px"
                    height="20px"
                    viewBox="0 0 24 24"
                    class="icon
                        stroke-primary group-hover/svg-search:stroke-secondary
                        fill-secondary group-hover/svg-search:fill-primary"
                >
                    <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Search
            </button>
        </div>
        <div class="flex justify-end md:justify-center items-center">
            <a href="<?php echo site_url(); ?>">
                <h1 class="text-3xl font-extrabold text-primary leading-normal">Logo<span class="text-accent">Here</span></h1>
            </a>
        </div>
        <div class="flex gap-5 justify-end items-center">
            <div class="hidden md:flex lg:flex-row rounded-xl border border-primary p-1 md:px-3 lg:p-1 h-full justify-between items-center">
                <label class="swap swap-rotate">
                <!-- this hidden checkbox controls the state -->
                <input id="toggle-theme-btn-lg" type="checkbox" class="theme-controller" value="synthwave" />
                <!-- sun icon -->
                <svg
                    class="swap-off h-10 w-10 fill-primary"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>
                <!-- moon icon -->
                <svg
                    class="swap-on h-10 w-10 fill-primary"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
                </label>
            </div>
            <a type="button" class="btn-outline-primary rounded-xl lg:rounded-full hidden md:flex flex-col lg:flex-row gap-0 md:gap-1 lg:gap-2 items-center group/svg-cart h-full" href="<?php echo site_url() . '/cart'; ?>">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20px"
                    height="20px"
                    viewBox="0 0 24 24"
                    class="icon
                        stroke-primary group-hover/svg-cart:stroke-secondary
                        fill-secondary group-hover/svg-cart:fill-primary"
                >
                    <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="hidden lg:block">
                    Cart <?php if ( $cart_count ) : ?><div class="badge badge-sm badge-accent"><?php echo $cart_count; ?></div> <?php endif; ?>
                </span>
                <span class="lg:hidden text-xs">
                    Cart <?php if ( $cart_count ) : ?><div class="badge badge-sm badge-accent"><?php echo $cart_count; ?></div> <?php endif; ?>
                </span>
            </a>
        </div>
    </div>
</header>