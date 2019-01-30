<?php get_header() ?>


<!--=============================
            CAROUSEL
=============================-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
  <?php
  $slides = array(
    'post_type'      => 'slider',
    'posts_per_page' => 5
  );

  $get_slides = new WP_Query( $slides );
  $active = 0;
  ?>

  <ol class="carousel-indicators">
  <?php
   while ( $get_slides->have_posts() ) {
     $get_slides->the_post();

   ?>
  <!-- Indicators -->
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $active ?>" class="<?php if ($active === 0 ) {echo 'active';} ?>"></li>
  <?php $active += 1; } ?>
</ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
     $active = 0;
     while ( $get_slides->have_posts() ) {
       $get_slides->the_post();
       $active += 1;
     ?>

     <div class="item <?php if ($active === 1 ) {echo 'active';} ?>">
       <?php the_post_thumbnail('slideshow') ?>
       <div class="carousel-caption"></div>
     </div>

     <?php } wp_reset_postdata(); ?>

  </div><!-- carousel-inner -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- =============================
            BAJADA
=============================-->
<div class="bajada">
  Los conformistas son bienvenidos en cualquier parte, porque nunca tienen problemas con lo genérico, lo uniforme, lo universal, lo seriado o mas de lo mismo.
  Por eso nosotros preferimos a los demandantes, perfeccionistas, exigentes, los que buscan lo diferente, los que quieren algo mejor.
  Porque son ellos los que cumplen sus sueños, van hacia adelante sin dudar y solo miran atrás para saber cuánto han avanzado.
  Ellos, como nosotros, creemos que podemos optar por algo mejor, diferente, único y distinto a todo lo demás.
  Somos inconformistas, somos idealistas,  buscamos lo exclusivo, lo inimitable, lo que no se ha hecho antes.
  Somos BROKERAGE·CHILE.
</div>
<!-- =============================
            OFICINAS
=============================-->
<div id="oficinas">
      <div class="inner">
          <h3>BROKERAGE·CHILE entrega una completa asesoría en materias que van desde venta y arriendo de inmuebles, representación en negociaciones y renegociación de contratos.
              Nos especializamos en oficinas, locales comerciales, bodegas, centros de logísticas y residenciales.</h3>

          <!-- OFICINAS Menu -->

          <ul class="oficinas-menu">
            <h2>Oficinas</h2>
            <li class="current all"><a href="#">Todas las comunas</a></li>
              <li class="cond"><a href="#">Las Condes</a></li>
              <li class="prov"><a href="#">Providencia</a></li>
              <li class="cent"><a href="#">Sector Centro</a></li>
          </ul><!-- fin OFICINAS-menu -->

          <!-- OFICINAS -->
          <ul class="oficinas clear">

        <?php $arg = array(
         'post_type'       => 'oficinas',
         'posts_per_page'  => 12
         );

         $get_arg = new WP_Query( $arg );

         while ( $get_arg->have_posts() ) {
         $get_arg->the_post();
         ?>

         <li class="relative" data-id="id-1" data-type="cond">
             <a href="#">
                 <img src="<?php bloginfo('template_url') ?>/assets/images/of_1.jpg" alt="#" />
                 <div class="absolute" >
                   Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                 </div>
             </a>
         </li>

         <?php } wp_reset_postdata(); ?>


            <!-- <li class="relative" data-id="id-2" data-type="cond">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_2.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-3" data-type="prov">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_3.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-4" data-type="prov">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_4.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-5" data-type="prov">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_5.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-6" data-type="cond">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_6.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-7" data-type="prov">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_7.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-8" data-type="cent">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_8.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-9" data-type="cent">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_9.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-10" data-type="cent">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_11.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-11" data-type="cond">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_12.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-12" data-type="prov">
                  <a href="#">
                      <img src="<#?php bloginfo('template_url') ?>/assets/images/of_13.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li> -->

          </ul><!-- .Oficinas -->
      </div><!-- .inner -->
</div><!-- #Oficinas -->

<!-- =============================
            BODEGAS
=============================-->
<div id="bodegas">
      <div class="inner">

          <!-- BODEGAS Menu -->

          <ul class="bodegas-menu">
            <h2>Bodegas</h2>

            <li class="current all"><a href="#">Todas las comunas</a></li>
              <li class="cond"><a href="#">Las Condes</a></li>
              <li class="prov"><a href="#">Providencia</a></li>
              <li class="cent"><a href="#">Sector Centro</a></li>
          </ul><!-- fin OFICINAS-menu -->

          <!-- BODEGAS -->
          <ul class="bodegas clear">
            <li class="relative" data-id="id-1" data-type="cond">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_1.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-2" data-type="cond">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_2.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-3" data-type="prov">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_3.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-4" data-type="prov">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_4.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-5" data-type="prov">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_5.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-6" data-type="cond">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_6.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-7" data-type="prov">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_7.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-8" data-type="cent">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_8.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-9" data-type="cent">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_9.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-10" data-type="cent">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_11.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-11" data-type="cond">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_12.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

            <li class="relative" data-id="id-12" data-type="prov">
                  <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/assets/images/of_13.jpg" alt="#" />
                      <div class="absolute" >
                        Providencia · <strong>UF $130.000</strong> · Oficina <br> Carmen Silva/El Bosque
                      </div>
                  </a>
              </li>

          </ul><!-- .bodegas -->
      </div><!-- .inner -->
</div><!-- #bodegas -->

<!--=============================
              FOOTER
=============================-->


<?php get_footer() ?>
