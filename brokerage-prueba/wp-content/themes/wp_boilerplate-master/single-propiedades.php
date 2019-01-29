<?php get_header() ?>

<main class="content">
  <article>
    <div class="container">

      <?php if (have_posts()){ ?>
        <?php while (have_posts()){ ?>
          <?php the_post(); ?>

          <?php
          $images = get_field('gallery');
          $availability = get_field('availability');
          $field = get_field_object('comuna');
          $value = $field['value'];
          $label = $field['choices'][ $value ];
          $banos = get_field('banos');
          ?>

          <!-- descripción -->
          <?php the_field('descripcion'); ?>

          <!-- slider gallery -->
          <?php
          if( $images ): ?>
              <div id="slider" class="flexslider">
                  <ul class="slides">
                      <?php foreach( $images as $image ): ?>
                          <li>
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                              <p><?php echo $image['caption']; ?></p>
                          </li>
                      <?php endforeach; ?>
                  </ul>
              </div>
              <div id="carousel" class="flexslider">
                  <ul class="slides">
                      <?php foreach( $images as $image ): ?>
                          <li>
                              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </li>
                      <?php endforeach; ?>
                  </ul>
              </div>
          <?php endif; ?>

          <!-- Tipo de propiedad -->
          <p>Tipo de Propiedad: <?php the_field('tipo') ?></p>

          <!-- Comuna -->
          <p>Comuna: <span class="color-<?php echo $label; ?>"></span></p>

          <!-- nro de baños -->
          <p>
          <?php if( $banos ){
            echo $banos;
          } endif; ?>

          <!-- Disponibilidad -->
          <?php if ($availability){
            echo "<p> Disponibilidad inmediata </p>";
          } else {
            echo "<p> Esta Propiedd no tiene disponibilidad inmediata </p>";
          } ?>


        <?php }?> <!-- if have_posts -->
      <?php }?> <!-- While have_posts -->

    </div>
  </article>
</main>





<?php get_footer() ?>
