<!-- PRODUCT DETAILS -->
<section class="">
    <div class="my-20 flex flex-col justify-center items-center font-semibold">
        <h1 class="text-6xl lg:text-8xl col-span-1 text-primary lg:mx-10">Our Product</h1>
        <h1 class="text-6xl lg:text-8xl col-span-1 text-primary lg:mx-10">Details</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-[200px_200px_200px] gap-4 px-5 lg:px-0">
        <!-- Left Large Image -->
        <div class="md:row-span-3 bg-gray-100 flex items-center justify-center overflow-hidden">
            <img
                src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera.webp'; ?>"
                alt="camera"
                class="w-auto h-[300px] md:h-full md:max-h-[450px] object-contain"
            >
        </div>

        <!-- Top Right Image -->
        <div class="md:row-span-2 bg-gray-100 flex items-center justify-center overflow-hidden">
            <img
                src="<?php echo get_template_directory_uri() . '/src/assets/home/video-3d-camera.webp'; ?>"
                alt="video-camera"
                class="h-auto w-[400px] md:w-full md:max-w-[500px] object-contain"
            >
        </div>

        <!-- Bottom Right Image -->
        <div class="md:row-span-1 bg-gray-100 flex items-center justify-center overflow-hidden">
            <img
                src="<?php echo get_template_directory_uri() . '/src/assets/home/3d-camera-front.webp'; ?>"
                alt="camera"
                class="h-auto w-[220px] md:w-full md:max-w-[250px] object-contain"
            >
        </div>
    </div>
</section>