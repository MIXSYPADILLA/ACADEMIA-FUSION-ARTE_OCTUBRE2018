<?php get_header() ?>
<!-- Slideshow 4 -->

<div class="slider">
  <div class="callbacks_container">
    <ul class="rslides" id="slider4">
      <li>
        <div class="slider-img one-img">
          <div class="container">
            <div class="slider-info text-left">
             <h4> <?php bloginfo('name') ?><br><span class="pink-col">Fusión Arte</span></h4>
              <p class="pt-3">Danza, Canto, Teatro y Música </p>
              <div class="outs_more-buttn">
                <a href="contacto">Contáctanos</a>
              </div>
            </div>
          </div>
        </div>
      </li>
      
  <div class="clearfix"></div>
</div>
<!-- //banner -->
<!--galeria-fotos-mov -->
<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
  <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
    <div class="agile-abt-info text-center">
      <h2>Academia de Formación <br>Fusión Arte</h2>
    </div >
    <div class="text-center info-sub pb-lg-4 pb-md-3 pb-sm-3 pb-3">
        <p>Clases de Danza, Teatro Musical, Ballet, Artes Escénicas,
        horarios según la época del año.
      </p>
    </div>
    <div class="row agile-info-grid pt-lg-4 pt-md-4 pt-3">

      <?php
      $arg = array(
        'post_type'       => 'Home',
        'posts_per_page'  => 3
      );

      $get_arg = new WP_Query( $arg );

      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>
     <div class="col-lg-4 col-md-4 -abut-list text-center">
      <div class="white-shadow">
       <div class="abut-gride-dance">
         <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
      </div>
      <div class="abt-sub-info">
        <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
      </div>
      <div class="outs-agile-buttn mt-lg-3 mt-2">
        <a href="contacto"> INSCRIBETE </a>
      </div>
    </div>
  </div>
    <?php } wp_reset_postdata();
    ?>
  <!--<div class="col-lg-4 col-md-4 -abut-list text-center">
    <div class="white-shadow">
     <div class="abut-gride-dance">
      <img class="img-fluid" src="<?php //echo get_theme_file_uri() ?>/assets/img/ini2.png">

    </div>
    <div class="abt-sub-info">
      <h4>DANZAS MODERNAS</h4>
      <p>Desde los 6 años de edad; trabajo corporal y musical, también trabajo acrobático,  a través de técnicas modernas como: jazz contemporáneo, lirical y Street jazz.</p>
    </div>
    <div class="outs-agile-buttn mt-lg-3 mt-2">
      <a href="contacto">INSCRIBETE</a>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-4 -abut-list text-center">
  <div class="white-shadow">
   <div class="abut-gride-dance">
    <img class="img-fluid" src="<?php //echo get_theme_file_uri() ?>/assets/img/ini3.png">
  </div>
  <div class="abt-sub-info">
    <h4>TEATRO MUSICAL</h4>
    <p>Desde los  5 años de edad sin límites de edad. Desarrollo de las artes escénicas de Danza, actuación y canto, integradas en una performance escénica.</p>
  </div>
  <div class="outs-agile-buttn mt-lg-3 mt-2">
    <a href="contacto">INSCRIBETE</a>
  </div>
</div>
</div>-->
</div>
</div>
<!--directory -->
<section class="service py-lg-4 py-md-3 py-sm-3 py-3">
 <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
  <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Roxana Mendoza Silva – Directora </h3>
  <div class="row service-both">
   <div class="col-lg-5 wthree-left-img-ser">
    <img class="img-fluid-directora" src="<?php echo get_theme_file_uri() ?>/assets/img/ser1.jpg">
  </div>

  <div class="col-lg-7 right-ser-list pt-lg-5 pt-md-4 pt-3">
    <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
      <span class="far fa-gem"></span>
    </div>
    <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
      <h4>Licenciada en artes con mención en danza en la U. De Chile, año 2008 </h4>
      <p> Años más tarde se perfecciona en Danza y Coreografía, en Uniacc.Maneja técnicas como el Tap, jazz, lyrical, jazz contemporáneo, técnica líder, ballet y otros estilos de danza espectáculo. Conocimientos básicos del folklore.</p>
    </div>
  </div>
  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
   <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
    <span class="fas fa-hourglass-half"></span>
  </div>
  <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
    <h4>maestra y directora de la academia de danza y Artes escénicas “FUSIÓN ARTE”</h4>
    <p>Aparte de ser una destacada bailarina, es Coreógrafa y Asistente de Dirección  de la Compañía Teatro Musical de Chile bajo la dirección de Christian Montenegro.Su experiencia como profesora de danza  parte a los 19 años impartiendo clases de danza  en la Municipalidad El Bosque, luego en distintas academias de ballet y como  profesora de danzas modernas en escuelas de distintas comunas desde el año 2008. Trayectoria de  más de 12 años.</p>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--//directora -->     
<!--carrusel-->

<section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3">
  <div class="container py-lg-5 py-md-5 py-sm-4 py-3">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner text-center">
       <div class="carousel-item active client-img">
         <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/t1.jpg">

         <div class="client-matter py-lg-4 py-md-3 py-3">
           <h6 class="pt-lg-3 pt-2"> ACADEMIA </h6>
         </div>
       </div>
       <div class="carousel-item client-img">
         <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/t2.jpg">

         <div class="client-matter py-lg-4 py-md-3 py-3">
           <h6 class="pt-lg-3 pt-2">FUSIÓN </h6>
         </div>
       </div>
       <div class="carousel-item client-img">
         <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/t3.jpg">

         <div class="client-matter py-lg-4 py-md-3 py-3">
           <h6 class="pt-lg-3 pt-2"> ARTE </h6> 
         </div>
       </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>

     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>

     </a>
   </div>
 </div>
</section>
<!--//carrusel finish -->

<?php get_footer() ?>
