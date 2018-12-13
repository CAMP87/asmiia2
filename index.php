<?php
    get_header(); 
    b4st_main_before();
?>
<main>
  <section class="slider-wrap"> 
    <div class="slider">
      <?php
        $args = array (
          'posts_per_page' => 3,
          'post_type' => array ('post','publicaciones'),
          'order_by' => 'date',
        );
        $lequery = new WP_Query( $args );
      ?>
      <?php
        if ( $lequery->have_posts() ) :
      ?>
    <div class="slide">
      <?php
        while ( $lequery->have_posts() ) : $lequery->the_post();
      ?>
      <div class="slides">
        <div class="titul">
          <h1 class="titul-slide"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        </div>
        <div class="conte-s">
          <p class="conte-slide"><?php the_excerpt(); ?></p>
        </div>
        <div class="imagen">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="imagen_mobile">
          <img src="<?php the_field('imagen_mobile');?>" alt="">
        </div>  
      </div>
    <?php
    endwhile;
    endif;
  // Reset Post Data
    wp_reset_postdata();
  ?>
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
