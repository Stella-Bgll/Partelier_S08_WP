<?php

// On préfixe nos fonctions avec le nom du thème (ici oBlog) pour éviter les conflits de nommage avec le code de wordpress ou des plugins (PHP n'autorise pas à définir 2 fois une fonction avec le même nom)
// Et pour être sur de ne pas avoir de souci, on teste que la fonction n'a pas déjà été déclarée

// Typiquement, le fichier function.php devrait contenir au minimum une fonction php pour initialiser la configuration du thème. Ici oBlog_script
if (!function_exists('oBlog_script')) { // Si la fonction oBlog_script() n'existe pas -> alors on rentre dans le if
    function oBlog_script()
    {
        
        wp_enqueue_style('oBlog-style', get_template_directory_uri().'/assets/css/style.css', '1.1');
      
    }
    // Au moment ou wordpress ajoute les scripts/css, on veut qu'il excute notre fonction oBlog_scripts pour ajouter nos css
    // 1er paramêtre : l'évènement wordpress (ici wp_enqueue_scripts est l'évènement declenché lorsque wordpress charge les scripts et les fichiers CSS sur le front)
    // 2eme paramêtre : la fonction a appeller lorsque l'évènement en 1er paramêtre est declenché (ici c'est la fonction onews_scripts() qu'on a créer un peu plus haut)
    add_action('wp_enqueue_scripts', 'oBlog_script');
}

?>