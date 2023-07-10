<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));


}



/**
 * Ajout du lien Admin
 */
function ajouter_lien_admin($items, $args) {
    // Vérifier si l'utilisateur est connecté et a le rôle d'administrateur
    if (is_user_logged_in() && current_user_can('administrator')) {

// puis il exclut l'ajout de l'élément de menu si l'emplacement du menu est défini comme étant le menu du footer.
            if ($args->theme_location !== 'footer') {

        // Obtenir le lien d'administration du site WordPress

            $admin_url = admin_url();

        // Ajouter l'élément de menu
           $element_menu = '<li class="lien_admin"><a href="' . $admin_url . '">Admin</a></li>';

        // Insérer l'élément de menu en deuxième position
        $items = substr_replace($items, $element_menu, strpos($items, '</li>', strpos($items, '<li>') + 1) + 5, 0);
    }
    }
    return $items;
}

// Ajouter le hook pour exécuter la fonction d'ajout d'élément de menu
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);