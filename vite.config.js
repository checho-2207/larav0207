import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS

                // MP4
                'resources/views/6157787-hd_1920_1080_30fps.mp4',
                'resources/views/6157909-hd_1920_1080_30fps.mp4',
                'resources/views/6158135-hd_1920_1080_30fps.mp4',
                'resources/views/6158066-hd_1920_1080_30fps.mp4',
                'resources/views/6161372-hd_1920_1080_30fps.mp4',
                'resources/views/9606768-uhd_3840_2160_25fps.mp4',
                'resources/views/4101696-hd_1920_1080_25fps.mp4',
                'resources/views/7565182-uhd_4096_2160_25fps.mp4',
                'resources/views/14514414-uhd_3840_2160_25fps.mp4'

            ],
            refresh: true,
        }),
    ],
});
