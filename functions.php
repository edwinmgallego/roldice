<?php
function RolDice_styles(){
wp_enqueue_style('normalize',get_stylesheet_directory_uri().'/css/normalize.css');
wp_enqueue_style('boostrap',"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
wp_enqueue_style('style',get_stylesheet_uri());
wp_enqueue_scripts('jquery');
wp_enqueue_scripts('boostrapjs',"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");
}
add_action('wp_enqueue_scripts','RolDice_styles');
 ?>
