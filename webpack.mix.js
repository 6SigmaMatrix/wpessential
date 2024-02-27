let mix = require( 'laravel-mix' );
mix.setPublicPath( './' );
if ( ! mix.inProduction() )
{
	mix.js( 'src/wpessential-admin.js', 'assets/js' ).vue( { version : 3 } );
	//mix.sass( 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' );
	mix.sourceMaps( true, 'source-map' );
	mix.version();
	mix.options( {
		processCssUrls : false, fonts : 'assets/fonts'
	} );
}

if ( mix.inProduction() )
{
	mix.minify( [ 'assets/js/wpessential-admin.js' ] );
	//mix.minify( [ 'src/wpessential-admin.scss', 'assets/css/wpessential-admin.css' ] );
}
