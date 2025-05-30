<?php
    $wrapper_class = $args['class'] ?? '';
    $svg_class = $args['svg_class'] ?? '';
?>

<div class="<?php echo esc_attr($wrapper_class); ?> rounded-full flex justify-center items-center">
    <svg
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="<?php echo esc_attr($svg_class); ?>"
    >
        <g
            id="SVGRepo_bgCarrier"
            stroke-width="0">
        </g>
        <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round">
        </g>
        <g
            id="SVGRepo_iconCarrier">
            <path
                opacity="0.15"
                d="M12 3C12 7.97056 16.0294 12 21 12C16.0294 12 12 16.0294 12 21C12 16.0294 7.97056 12 3 12C7.97056 12 12 7.97056 12 3Z"
            >
            </path>
            <path
                d="M12 3C12 7.97056 16.0294 12 21 12C16.0294 12 12 16.0294 12 21C12 16.0294 7.97056 12 3 12C7.97056 12 12 7.97056 12 3Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round">
            </path>
        </g>
    </svg>
</div>