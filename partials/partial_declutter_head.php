<?php

// ————————————————————————————————————————————————————————————————————————————————————————————————
//
// Declutter wp_head()
//
// ————————————————————————————————————————————————————————————————————————————————————————————————

//Remove emoji
remove_action("wp_head", "print_emoji_detection_script", 7);
remove_action("wp_print_styles", "print_emoji_styles");
add_filter('emoji_svg_url', '__return_false');

//Remove DNS Prefetch explainer
remove_action('wp_head', 'wp_resource_hints', 2);

//Remove RSD link
remove_action('wp_head', 'rsd_link');

//Remove generator – wordpress version link
remove_action('wp_head', 'wp_generator');

//Remove Windows Live Writer link
remove_action('wp_head', 'wlwmanifest_link');

//Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

?>