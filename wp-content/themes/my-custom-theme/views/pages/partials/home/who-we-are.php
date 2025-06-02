<!-- WHO WE ARE -->
<section class="block relative">
    <div class="my-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-5 lg:gap-y-10 pb-15 lg:pb-0">
            <h1 class="text-6xl lg:text-8xl col-span-1 text-primary text-center lg:text-left self-center">Who We are</h1>
            <div class="flex flex-col lg:flex-row col-span-2 items-center">
                <div class="grid lg:grid-cols-3 gap-5">
                    <p class="col-span-2 text-2xl ms-10 me-5 text-gray-500">We believe that every photograph tells a story, and every story deserves to be captured with precision, clarity, and soul. Founded by a team of passionate photographers and engineers</p>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="hidden lg:block fill-gray-300 col-span-1
                            h-auto lg:w-[150px]"
                        viewBox="0 0 32 32"
                        >
                        <path d="M27.719 5.109c-0.135-0.141-0.266-0.286-0.401-0.422-0.141-0.141-0.281-0.271-0.427-0.401-2.953-2.766-6.849-4.297-10.891-4.286-4.245-0.010-8.318 1.677-11.313 4.688-6.104 6.099-6.234 15.938-0.401 22.203 0.13 0.146 0.26 0.286 0.396 0.427 0.141 0.135 0.281 0.266 0.422 0.401 2.958 2.76 6.854 4.292 10.896 4.281 4.276 0 8.292-1.661 11.318-4.682 6.099-6.104 6.229-15.943 0.401-22.208zM5.51 5.51c2.776-2.792 6.552-4.354 10.49-4.344 3.766 0 7.318 1.396 10.068 3.943l-1.333 1.339c-2.385-2.188-5.5-3.401-8.734-3.391-3.438-0.010-6.729 1.354-9.151 3.792-2.438 2.422-3.802 5.719-3.792 9.151 0 3.266 1.198 6.339 3.391 8.734l-1.339 1.333c-5.375-5.813-5.245-14.911 0.401-20.557zM23.906 7.266v0.005l-1.354 1.354c-1.797-1.62-4.135-2.51-6.552-2.505-2.62-0.010-5.135 1.036-6.984 2.896-1.859 1.844-2.901 4.365-2.896 6.984-0.005 2.417 0.885 4.75 2.5 6.552l-1.349 1.354c-1.969-2.161-3.057-4.984-3.047-7.906-0.010-3.125 1.234-6.125 3.448-8.328 2.203-2.214 5.203-3.458 8.328-3.448 2.953 0 5.734 1.078 7.906 3.042zM24.714 16c0 2.328-0.906 4.516-2.552 6.161s-3.833 2.557-6.161 2.557c-2.109 0-4.146-0.771-5.729-2.161v-0.005c-0.146-0.125-0.292-0.25-0.432-0.391-0.135-0.141-0.266-0.286-0.391-0.432-1.396-1.583-2.167-3.62-2.161-5.729 0-2.328 0.906-4.516 2.552-6.161 1.63-1.641 3.849-2.557 6.161-2.552 2.13 0 4.141 0.766 5.729 2.161 0.146 0.125 0.297 0.25 0.432 0.391 0.141 0.141 0.266 0.286 0.391 0.432 1.396 1.583 2.167 3.62 2.161 5.729zM9.448 23.38c1.797 1.615 4.135 2.505 6.552 2.505 2.625 0.005 5.141-1.036 6.984-2.901 1.859-1.849 2.906-4.365 2.896-6.984 0.005-2.417-0.885-4.75-2.5-6.552l1.354-1.354c1.964 2.161 3.052 4.984 3.047 7.906 0.005 3.125-1.234 6.125-3.453 8.328-2.203 2.219-5.203 3.458-8.328 3.453-2.922 0.005-5.745-1.083-7.906-3.047zM26.49 26.49c-2.776 2.792-6.552 4.354-10.49 4.344-3.734 0.010-7.333-1.401-10.068-3.943l1.339-1.333c2.38 2.188 5.5 3.396 8.734 3.391 3.432 0.005 6.729-1.359 9.151-3.797 2.432-2.422 3.802-5.719 3.792-9.151 0.005-3.234-1.203-6.349-3.391-8.729l1.333-1.339c5.375 5.813 5.245 14.911-0.401 20.557z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-rows-none lg:grid-cols-3 gap-10">
            <div class="hidden lg:block col-span-1 flex justify-start relative">
                <svg
                    class="fill-accent w-24 h-auto transform scale-200 rotate-45 lg:ms-15 relative lg:top-10"
                    viewBox="0 0 100 100"
                    width="100px"
                    height="100px"
                >
                    <path d="M0,50 a1,1 0 0,0 100,0"/>
                </svg>
                <?php get_template_part('template/components/star-icon', null, [
                    'class' => 'bg-gray-100 h-20 w-20 relative lg:-top-20 lg:left-30',
                    'svg_class' => 'stroke-black fill-black h-[45px] w-auto'
                ]); ?>
            </div>
            <div class="bg-warning col-span-2 h-40 lg:h-60 flex justify-center relative">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                    class="transform scale-230 lg:scale-260 relative lg:top-5"
                    alt="video-camera"
                >
            </div>
        </div>
    </div>
</section>