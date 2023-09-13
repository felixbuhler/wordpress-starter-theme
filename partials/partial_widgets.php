<?php

// ————————————————————————————————————————————————————————————————————————————————————————————————
//
// Register Widget for Intro Text
//
// ————————————————————————————————————————————————————————————————————————————————————————————————

function theme_widgets()
{
    // Footer Text
    register_sidebar(
        array(
            'name' => esc_html__('Footer Text', ''),
            'id' => 'footer-text',
            'description' => esc_html__('Footer Text', ''),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

}
add_action('widgets_init', 'theme_widgets');

// ————————————————————————————————————————————————————————————————————————————————————————————————

?>