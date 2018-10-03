<!DOCTYPE html> 
<html lang="es">
<head>
  <title>Academia Fusion Arte</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head() ?>
  
</head>
<body>
  <div class="header-outs" id="home">
    <div class="header-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="hedder-up">
          <img id="logo2"  src="<?php echo get_theme_file_uri(); ?>/assets/img/logo1.png" alt="" >
          <h1><a class="navbar-brand" href="index"></a></h1>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="index"> Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a href="nosotros" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="galeria" class="nav-link">Galería</a>
            </li>
            <li class="nav-item">
              <a href="compania" class="nav-link">Compañía</a>
            </li>
            <li class="nav-item">
              <a href="contacto" class="nav-link">Contacto</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 text-center">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="">
            <button class="btn my-2 my-sm-0 serch-btnn" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- flecha -->
            
  </div>
  <!-- //Navigation -->

