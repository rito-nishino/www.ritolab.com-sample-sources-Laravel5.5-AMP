let mix = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', '../resources/assets/build/css/')
   .sass('resources/assets/sass/reset.scss', '../resources/assets/build/css/')
   .sass('resources/assets/sass/page.scss', '../resources/assets/build/css/')
   .sass('resources/assets/sass/page-amp.scss', '../resources/assets/build/css/')
   .styles(
    [
      'resources/assets/build/css/app.css',
      'resources/assets/build/css/reset.css',
      'resources/assets/build/css/page.css'
    ],
    'public/css/app.css'
   );
