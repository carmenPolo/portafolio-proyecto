<?php get_header() ?>

<main class="bajada">
  <article>
    <div class="container">
      <!-- loop -->
      <?php if (have_posts()){ ?>
        <?php while (have_posts()){ ?>
          <?php the_post(); ?>

        <!-- variables -->
        <?php
        $availability = get_field('availability');
        $field = get_field_object('comuna');
        $value = $field['value'];
        $label = $field['choices'][ $value ];
        $banos = get_field('banos');
        ?>



      <!-- content -->
          <h1><?php the_title(); ?></h1>

          <?php the_content(); ?>

      <!-- slider gallery -->
      <?php
      $images = get_field('gallery');
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


      <ul>
        <!-- Tipo de propiedad -->
        <li>Tipo de Propiedad: <strong> <?php the_field('tipo') ?></strong> </li>

        <!-- Comuna -->
        <li>Comuna: <strong><?php echo $label; ?></strong></li>

        <!-- nro baños -->
        <li>
        <?php
          if($banos){
          echo "Cantidad de baños: {$banos}";
        };
        ?>
        </li>

        <!-- Disponibilidad -->
        <li>
        <?php if ($availability){
          echo "<em> *Disponibilidad inmediata </em>";
        } else {
          echo "<em> *Esta Propiedad no tiene disponibilidad inmediata </em>";
        } ?>
        </li>
      </ul>







      <!-- fin loop -->
        <?php }?> <!-- if have_posts -->
      <?php }?> <!-- While have_posts -->

    </div>
  </article>
</main>


<?php get_footer() ?>
