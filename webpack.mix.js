const mix = require( 'laravel-mix' );

mix
    .js( 'src/wpessential-admin.js', 'assets/js/wpessential-admin.js' )
    .sass( 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' );
