<?php
the_comments_pagination(
	[
		'prev_text' => twentyseventeen_get_svg( [ 'icon' => 'arrow-left' ] ) . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
		'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( [ 'icon' => 'arrow-right' ] ),
	]
);
