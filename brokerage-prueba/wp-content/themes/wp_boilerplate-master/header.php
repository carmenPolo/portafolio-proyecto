
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php get_template_part('_includes/iOS', 'icons') ?>

    <title>Portafolio</title>
		<?php wp_head() ?>
	</head>

  <body>


<!--=============================
              NAVBAR
=============================-->
    <nav class="navbar navbar-default navbar-fixed-top" >
      <div class="container-fluid"><!-- /.container-fluid -->
      <!-- Brand and toggle get grouped for better mobile display -->

      <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
    			<?php wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'container' => null,
            'menu_class'=> 'nav navbar-nav navbar-right'
          ) ); ?>
    		<?php } ?>


        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand brand" href="<?php bloginfo('url')?>">BROKERAGE·CHILE</a>
        </div>
        <!-- COMENT DOWN COLUMN:Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
          <!-- COMENT UP FILE:/.navbar-collapse -->
          <!-- COMENT DOWN COLUMN:<ul class="nav navbar-nav">-->
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#">NOSOTROS</a></li>
            <li><a href="#">OFICINAS</a></li>
            <li><a href="#">BODEGAS</a></li>
            <li><a href="#">ENCUENTRA TU PROPIEDAD</a></li>
            <li><a href="#">CONTACTO</a></li>
          </ul>
        </div> -->
        <!-- COMENT UP DIV:/.navbar-collapse -->
      </div><!-- COMENT UP DIV:/.container-fluid -->
    </nav>
	</body>
