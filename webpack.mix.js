let mix = require( 'laravel-mix' );
mix.setPublicPath( './' );
if ( ! mix.inProduction() )
{
		//mix.sass( 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' );
	mix.js( 'src/wpessential-admin.js', 'assets/js' )
		.js( 'src/wpessential-meta.js', 'assets/js' )
		.options( {
			processCssUrls : false, fonts : 'assets/fonts'
		} )
		.vue( { version : 3 } );
}

if ( mix.inProduction() )
{
	mix.minify( [ 'assets/js/wpessential-admin.js' ] );
	mix.minify( [ 'assets/js/wpessential-meta.js' ] );
	//mix.minify( [ 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' ] );
}
