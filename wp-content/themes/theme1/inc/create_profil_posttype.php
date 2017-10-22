<?php
function ajout_custom_profil(){
    $post_type = "profil";

$labels = array(
        'name'               => 'Profils',
        'singular_name'      => 'Profil',
        'all_items'          => 'Tout les profils',
        'add_new'            => 'Créer un profil',
        'add_new_item'       => 'Créer un nouveau profil',
        'edit_item'          => "Modifier un profil",
        'new_item'           => 'Nouveau Profil',
        'view_item'          => "Voir le profil",
        'search_items'       => 'Chercher un profil',
        'not_found'          => 'Pas de résultats',
        'not_found_in_trash' => 'Pas de résultats',
        'parent_item_colon'  => 'Profil Parent:',
        'menu_name'          => 'Profils',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-universal-access',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'capabilities' => array(
                          'edit_post'          => 'edit_profil', 
                          'read_post'          => 'read_profil', 
                          'delete_post'        => 'delete_profil', 
                          'edit_posts'         => 'edit_profils', 
                          'edit_others_posts'  => 'edit_others_profils', 
                          'publish_posts'      => 'publish_profils',       
                          'read_private_posts' => 'read_private_profils', 
                          'create_posts'       => 'edit_profils', 
                      ),
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type ),
    );

    register_post_type($post_type, $args);

    $taxonomy = "genre";
    $object_type = array("profil");
    $args = array(
          'label' => __( 'Genre' ),
          'rewrite' => array( 'slug' => 'genre' ),
          'hierarchical' => true,
      );

    register_taxonomy( $taxonomy, $object_type, $args );

     $taxonomy = "recherche";
    $object_type = array("profil");
    $args = array(
          'label' => __( 'Type de personne recherchée' ),
          'rewrite' => array( 'slug' => 'recherche' ),
          'hierarchical' => false,
      );
    
    register_taxonomy( $taxonomy, $object_type, $args );

  
  
}

add_action('init', 'ajout_custom_profil');