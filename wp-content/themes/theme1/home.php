<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
  <div class="row intro">
    <h3 class="col-sm-12">Quelques profils qui pourraient vous interesser...</h3>
  </div>
  <div class="row">
   <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args=array(
      'post_type' => 'profil',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order'   => 'DESC',
      'paged' => $paged,
    );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

    ?>
      <article class="new-profils col-xs-12 col-sm-6 col-md-4">
        
            <?php 
            if(has_post_thumbnail())
            {
              echo '<div class="thumbnail">';
                the_post_thumbnail("hub_profil_thumbnail");
              echo '</div>';
            }
         ?>
        <div class='identite thumbnail'>
          
          <?php if( get_field('genre') == 'une femme' ){ ?>
            <div class="femme">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_field('ma_description'); ?></p>
              <p>Recherche <?php the_field('cherche') ?></p>
            </div>
          <?php }

          elseif ( get_field('genre') == 'un homme'){ ?>
            <div class="homme">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_field('ma_description'); ?></p>
              <p>Recherche <?php the_field('cherche') ?></p>
            </div>
          <?php }

          else { ?>
            <div class="nongenre">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_field('ma_description'); ?></p>
              <p>Recherche <?php the_field('cherche') ?></p>
            </div>
          <?php }
          ?>
          
        </div>
        
      </article>
      <?php
        }
      }
      /* Restore original Post Data */
      wp_reset_postdata();
   ?>

  </div>
  

  <div class="pagination">
    <?php wp_pagenavi(array('query'=>$the_query)); ?>
  </div>

</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
