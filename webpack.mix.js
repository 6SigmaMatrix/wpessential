const mix = require( 'laravel-mix' );
mix.setPublicPath( './' );
if ( ! mix.inProduction() ) {
	mix.js( 'src/wpessential-admin.js', 'assets/js/wpessential-admin.js' );
	mix.sass( 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' );
	mix.sourceMaps( true, 'source-map' );
	mix.version();
	mix.options( {
		processCssUrls: false, fonts: 'assets/fonts'
	} );
}

if ( mix.inProduction() ) {
	mix.minify( [ 'src/wpessential-admin.js', 'assets/js/wpessential-admin.js' ] );
	mix.minify( [ 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' ] );
}
