<?php

add_action('admin_menu', 'random_menu_page');

function random_menu_page(){
    add_menu_page('Project4', 'Project4!', 'manage_options', 'project4', 'page_render', 'dashicons-smiley');
}


function page_render(){
    echo '
    <h1>Project Periode 4:</h1>
    <p>Dit thema is gebouwt voor het project van periode 4. <br>
    Deze pagina is een van de voorbeelden van wat jij zelf nog kan inbrengen binnen het admin menu van Wordpress zelf. <br>
    Vaak wordt dit soort functionaliteiten gemaakt voor plugins zodat je de instellingen daarvan goed kan scheiden. Ook kan je thema opties bieden.</p>
    
    <img class="temp" src="'. get_stylesheet_directory_uri() . '/assets/img/dough.png' . '" style="width: 25%">
    ';
}