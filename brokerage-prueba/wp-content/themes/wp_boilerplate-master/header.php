
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php get_template_part('_includes/iOS', 'icons') ?>

    <title>Portafolio</title>

		<!-- Script -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

		<?php wp_head() ?>
	</head>

  <body>


<!--=============================
              NAVBAR
=============================-->
    <nav class="navbar navbar-default navbar-fixed-top" >
      <div class="container-fluid"><!-- /.container-fluid -->
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand brand" href="#">BROKERAGE·CHILE</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><!-- /.navbar-collapse -->
          <!-- <ul class="nav navbar-nav">
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">NOSOTROS</a></li>
            <li><a href="#">OFICINAS</a></li>
            <li><a href="#">BODEGAS</a></li>
            <li><a href="#">ENCUENTRA TU PROPIEDAD</a></li>
            <li><a href="#">CONTACTO</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	</body>
