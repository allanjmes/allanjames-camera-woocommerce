<!-- NEWSLETTER -->
<section class="bg-gray-100 lg:mt-10 lg:mb-5 px-5">
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