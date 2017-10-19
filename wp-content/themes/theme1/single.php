<?php get_header(); //appel du template header.php  ?>

<div id="content">
    <h3 class='intro'>Le profil de...</h3>
    
    <div class="profil">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
     <h3 class="profil_name">
                <?php the_title(); ?>
            </h3>
            
            <div class="profil_picture">
            <?php 
             the_post_thumbnail('medium');
            ?>
            </div>

            <div class="profil_date_inscription">
                <p>Inscrit le <?php the_time('F jS, Y') ?></p>
            </div>
            
            <p>
                Je suis <?php the_field('genre'); ?></br>
                J'ai <?php the_field('age'); ?> ans</br>
                Je viens de <?php the_field('region'); ?></br>
                Je cherche <?php the_field('cherche'); ?></br></br>
                Mes activités sont </br>
                <ul classe="profil_activity"><?php the_field('activités'); ?></ul></br>
            </p>

            <div class="description"><p>Qui sui-je? </br><?php the_field('ma_description'); ?></p></div>

              
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
    </div>

<div class="pagination">
      <?php wp_pagenavi(); ?>
  </div>

</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>