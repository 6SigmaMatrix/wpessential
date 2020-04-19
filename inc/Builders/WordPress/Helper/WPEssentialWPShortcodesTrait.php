<?php

namespace WPEssential\Builders\WordPress\Helper;


trait WPEssentialWPShortcodesTrait
{
    private static array $args = [
        'post_status' => [ 'publish' ],
        'orderby'     => 'rendom',
        'order'       => 'DESC',
        'post_type'   => 'post',
    ];
}
