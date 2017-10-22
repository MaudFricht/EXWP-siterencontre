<footer id="footer">
        <!--
            Tout le contenu de la partie head de mon site
         -->
	<div class="container">
		<<div class="row">

            <div class="col-xs-12 col-md-6">
              <?php
              if ( is_active_sidebar( 'Sidebar Footer' ) ) { ?>
                  <div id="sidebar">
                      <?php dynamic_sidebar( 'Sidebar Footer' ); ?>
                  </div>
               <?php } ?>
            </div>
            <div class="col-xs-12 col-md-6">
              <?php
              if ( is_active_sidebar( 'Sidebar Footer 2' ) ) { ?>
                  <div id="sidebar">
                      <?php dynamic_sidebar( 'Sidebar Footer 2' ); ?>
                  </div>
               <?php } ?>
            </div>
            

          </div>
        
		<div class="row">
         <p>Crédits: La superbe équipe unipersonnelle de dev de votre site préféré ! (2017) </p>
    	</div>
    </div>
</footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>