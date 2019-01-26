<?php
    get_header(); 
    b4st_main_before();
?>
<main>

  <!-- Seccion del slideshow usando el loop. -->
  <section class="slider-wrap"> 
      <div>
          
          <!-- arreglo que muestra los argumentos que se tomaran en cuenta para el slideshow. -->
          <?php
            $args = array (
              'posts_per_page' => 3, // Muetra los ultimos 3 post.
              'post_type' => array ('post'), // Muestra el tipo de post mostrara.
              'order_by' => 'date', //Muestra el orden en el cual seran ordenados.
            );
            
            $postSlide = new WP_Query( $args );
          ?>

          <?php
              if ( $postSlide->have_posts() ) :
          ?>

              <div class="slider">
                <?php
                  while ( $postSlide->have_posts() ) : $postSlide->the_post();
                ?>
                <div class="contenidoSlide">
                    
                    <div class="tituloSlide">
                        <h1 class="postSlide"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                    </div>

                    <div class="excerptSlide">
                        <p class="parrafoSlide"><?php the_excerpt(); ?></p>
                    </div>
                    
                    <?php the_post_thumbnail(); ?>
                </div>

          <?php
               endwhile;
               endif;
               // Reset Post Data
               wp_reset_postdata();
          ?>

          </div>
      </div> 

  </section>


  <section class="quienes">
    <div class="quienes-intro">
      <h1>¿Quienes somos?</h1>
    </div>
    <div class="quienes-generales row">
      <div class="mision col-6">
        <h1>mision</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quod, soluta consequatur fugit quae. Adipisci veritatis reprehenderit iusto consequatur exercitationem nam, facere perferendis dolorem, laudantium perspiciatis architecto illo aspernatur natus deserunt error pariatur fugiat. Dolorem aut consequuntur quam provident autem aperiam, repellendus magnam, accusamus sequi voluptatum explicabo optio in voluptatem?</p>
      </div>
      <div class="vision col-6">
        <h1>vision </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ipsam dicta dignissimos necessitatibus quisquam ducimus odio dolore neque, officia debitis natus dolorum ab praesentium possimus magnam voluptatem deleniti autem vitae nulla! Inventore natus ipsam aliquid placeat consectetur excepturi, laboriosam asperiores doloremque perspiciatis fuga eos. Molestiae ut ullam in minus autem?</p>
      </div>
    </div>
  </section>
</main>
<?php 
    b4st_main_after();
    get_footer(); 
?>
