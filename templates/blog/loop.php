<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php
do_action( 'wpe_post_format', get_post_format() );
the_content();
