import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        VitePWA({ 
                injectRegister: 'auto' ,
                workbox: {
                    globPatterns: ['**/*.{js,css,html,png,svg,jpg,ttf}'],
                    navigateFallback: null
                    },
                registerType: 'autoUpdate',
              manifest: {
                    name: 'Camera Take a snapshot',
                    short_name: 'Camera',
                    description: 'My first app with camera in laravel and webapp progressive',
                    theme_color: '#90AACB',
                    background_color: '#F9D5A7',
                    icons: [
                      {
                        src: 'assets/images/windows11/SmallTile.scale-100.png',
                        sizes: '71x71',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/windows11/SmallTile.scale-400.png',
                        sizes: '284x284',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/android/android-launchericon-512-512.png',
                        sizes: '512x512',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/android/android-launchericon-48-48.png',
                        sizes: '48x48',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/ios/144.png',
                        sizes: '144x144',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/android/android-launchericon-144-144.png',
                        sizes: '144x144',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/ios/128.png',
                        sizes: '128x128',
                        type: 'image/png'
                      },
                      {
                        src: 'assets/images/ios/128.png',
                        sizes: '128x128',
                        type: 'image/png'
                      }
                    ]
                  }
            })
    ],
});
