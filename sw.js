const CACHE_NAME = 'prayer-times-v1';
onst ASSETS_TO_CACHE = [
   '/',
   '/index.html',
   '/icons/logo.png',
   '/favicon.png',
   'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
;
// Install Service Worker
elf.addEventListener('install', (event) => {
   event.waitUntil(
       caches.open(CACHE_NAME)
           .then((cache) => {
               return cache.addAll(ASSETS_TO_CACHE);
           })
   );
);
// Activate Service Worker
elf.addEventListener('activate', (event) => {
   event.waitUntil(
       caches.keys().then((cacheNames) => {
           return Promise.all(
               cacheNames.map((cacheName) => {
                   if (cacheName !== CACHE_NAME) {
                       return caches.delete(cacheName);
                   }
               })
           );
       })
   );
);
// Fetch resources
elf.addEventListener('fetch', (event) => {
   event.respondWith(
       caches.match(event.request)
           .then((response) => {
               // Return cached version if available
               if (response) {
                   return response;
               }
                // Otherwise fetch from network
               return fetch(event.request)
                   .then((response) => {
                       // Check if we received a valid response
                       if (!response || response.status !== 200 || response.type !== 'basic') {
                           return response;
                       }
                        // Clone the response
                       const responseToCache = response.clone();
                        // Add to cache
                       caches.open(CACHE_NAME)
                           .then((cache) => {
                               cache.put(event.request, responseToCache);
                           });
                        return response;
                   });
           })
   );
);
// Handle push notifications
elf.addEventListener('push', (event) => {
   if (event.data) {
       const data = event.data.json();
       const options = {
           body: data.body,
           icon: 'icons/logo.png',
           badge: 'icons/logo.png',
           vibrate: [100, 50, 100],
           data: {
               dateOfArrival: Date.now(),
               primaryKey: 1
           }
       };
        event.waitUntil(
           self.registration.showNotification(data.title, options)
       );
   }
);
// Handle notification clicks
elf.addEventListener('notificationclick', (event) => {
   event.notification.close();
   event.waitUntil(
       clients.openWindow('/')
   );
);
