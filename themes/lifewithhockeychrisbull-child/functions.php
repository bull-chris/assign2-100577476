<?php
//Functions PHP for Life with Hockey - Chris Bull website [Twenty Twenty-One Child Theme]

//function to enqueue the twenty twenty-one parent theme and the lifewithhockeychrisbull child theme
function enqueue_life_with_hockey_theme() {

    //store the lifewithhockeychrisbull-child theme as a variable
    $lifeWithHockey = wp_get_theme();

    //enqueue the twenty twenty one parent theme and its styling
    wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), $lifeWithHockey->parent()->get('Version'));

    //enqueue the lifewithhockeychrisbull-child theme and its styling, with dependencies from the twenty twenty-one parent
    wp_enqueue_style('lifewithhockeychrisbullchild-style', get_stylesheet_uri(), array('twenty-twenty-one-style'), $lifeWithHockey->get('Version'));

    //enqueue the life-with-hockey-styling css file to use with the life with hockey child theme
    wp_enqueue_style('lifewithhockeychrisbullchild-styling-overrides', get_stylesheet_directory_uri() . '/assets/css/life-with-hockey-styling.css', array('twenty-twenty-one-style'), $lifeWithHockey->get('Version'));
}

//add the enqueue_life_with_hockey_theme function as the action for wordpress enqueue scripts to perform
add_action( 'wp_enqueue_scripts', 'enqueue_life_with_hockey_theme' );

?>