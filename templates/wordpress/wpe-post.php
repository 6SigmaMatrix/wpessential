<?php
$p      = (array) $p;
$status = (array) $status;
$post   = new WP_Query( [
    'post__in'    => $p,
    'order'       => 'DESC',
    'orderby'     => 'random',
    'post_status' => $status
] );
wpe_error( $post );
if ( $post->have_posts() ):
    while ( $post->have_posts() ):
        $post->the_post();
    endwhile;
    wp_reset_postdata();
endif;


