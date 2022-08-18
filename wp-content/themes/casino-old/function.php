<?php

function casino_register_style()
{
wp_enqueue_style('casino-bootstrap',get_template_directory_uri()."/page-homepage.css".array(),'1.0','all' );
}

add_action('wp_enqueue_style','casino_register_style');


?>