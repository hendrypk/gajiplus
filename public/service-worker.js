// public/service-worker.js
self.addEventListener('install', (event) => {
    console.log('[Service Worker] Installing Service Worker...');
    event.waitUntil(
        caches.open('v1').then((cache) => {
            console.log('[Service Worker] Caching app shell');
            return cache.addAll([
                '/', // Cache halaman utama
                '/assets/css/style.css', // Cache file CSS
                '/assets/js/main.js', // Cache file JS
                '/assets/img/logo/gajiplus/72x72.png', // Cache ikon
            ]);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
