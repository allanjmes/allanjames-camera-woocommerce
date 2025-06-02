<section class="bg-primary">
    <div class="p-10">
        <div class="relative">
            <!-- Top-left Image -->
            <img
                src="<?php echo get_template_directory_uri() . '/src/assets/home/hand-holding-camera.webp'; ?>"
                class="hidden lg:block absolute top-0 left-0 w-32 lg:w-55 h-auto"
                alt="hand-holding-camera"
            >

            <!-- Bottom-right or mid-right Image -->
            <img
                src="<?php echo get_template_directory_uri() . '/src/assets/home/female-colorful.webp'; ?>"
                class="hidden lg:block absolute top-15 right-0 w-32 lg:w-70 h-auto"
                alt="female-colorful-background"
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
                        alt="man-with-camera"
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