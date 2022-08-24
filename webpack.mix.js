let mix = require('laravel-mix');

/*mix.setPublicPath('public');
mix.setResourceRoot('../');*/
//js files
mix.js('src/js/navigation.js', 'assets/js/navigation.js');
mix.js('src/js/custom/*.js', 'assets/js/custom.js');

//css files
mix.sass('src/scss/style.scss', 'assets/css/style.css');
mix.sass('src/scss/home.scss', 'assets/css/home.css');
mix.sass('src/scss/product.scss', 'assets/css/product.css');
mix.sass('src/scss/about.scss', 'assets/css/about.css');
mix.sass('src/scss/admin-login.scss', 'assets/css/admin-login.css');

/*mix.options({
    fileLoaderDirs:  {
        fonts: 'src/fonts'
    }
});*/

mix.browserSync({
    watch: true,
    files: [
        'assets/js/*',
        'assets/css/*',
        '*.html',
        '*.php',
        'inc/*.php',
        'template-parts/*.php',
        'template-parts/blocks/*.php',
        'woocommerce/*.php',
        'woocommerce/*/*.php'
    ],
    proxy: {
        //target: "http://localhost/greg-botanical/", // your domain
    },
    port: 3000, // your port
});