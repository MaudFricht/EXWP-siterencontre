<?php
//SYNTAXE register_nav_menu( 'slug', 'Titre à afficher dans le BO' )

add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
}
?>