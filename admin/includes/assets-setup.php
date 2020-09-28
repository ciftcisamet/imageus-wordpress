<?php

add_action('wp_footer', 'ibup_assets');
add_action('wp_enqueue_scripts', 'ibup_assets_tag');

function ibup_assets_tag() {
    if (ibup_is_activated()) {
        // increase compatibility with older PHP versions
        $hosts = join(',', array_map(function($host) {
            return '\'' . $host. '\'';
        }, ibup_get_authorised_hosts()));

        $source = htmlspecialchars(ibup_get_source(), ENT_QUOTES, 'UTF-8');

        echo '<script type="text/javascript">window.initImageUs = {matchHosts: [' . $hosts . '], source: "'. $source .'"};</script>';
    }
}

function ibup_assets() {
    if (ibup_is_activated()) {
        wp_enqueue_script( 'imageus-web', 'https://img.imageus.dev/imageus.js', array(), false, true );
    }
}
