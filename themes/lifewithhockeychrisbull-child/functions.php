<?php
//Functions PHP for Life with Hockey - Chris Bull website [Twenty Twenty-One Child Theme]

//function to enqueue the twenty twenty-one parent theme and the lifewithhockeychrisbull child theme
function enqueue_life_with_hockey_theme() {

    //store the lifewithhockeychrisbull-child theme as a variable
    $lifeWithHockey = wp_get_theme();

    //enqueue the twenty twenty one parent theme and its styling
    wp_enqueue_style('twentytwentyone', get_template_directory_uri() . '/style.css', array(), $lifeWithHockey->parent()->get('Version'));

    //enqueue the lifewithhockeychrisbull-child theme and its styling, with dependencies from the twenty twenty-one parent
    wp_enqueue_style('lifewithhockeychrisbull-child', get_stylesheet_uri(), array('twentytwentyone'), $lifeWithHockey->get('Version'));
}

//add the enqueue_life_with_hockey_theme function as the action for wordpress enqueue scripts to perform
add_action( 'wp_enqueue_scripts', 'enqueue_life_with_hockey_theme' );

?>