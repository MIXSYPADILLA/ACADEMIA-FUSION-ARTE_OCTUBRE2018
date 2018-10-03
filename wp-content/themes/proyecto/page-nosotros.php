<?php get_header() ?>

<!-- banner -->
<div class="inner_page-banner1">
</div>
<!--//banner -->
<!-- short -->
<div class="using-border py-3">
 <div class="inner_breadcrumb  ml-4">
  <ul class="short_ls">
   <li>
    <a href="index.html">Inicio</a>
    <span>/ /</span>
  </li>
  <li>Nosotros</li>
</ul>
</div>
</div>
<!-- //short-->
<!--about-->
<div class="container">
  <section class="service py-lg-4 py-md-3 py-sm-3 py-3">
   <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
    <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"> Quienes Somos </h3></div>
    <div class="row service-inner-agile mt-lg-4 mt-3">
         <?php
      $arg = array(
        'post_type'       => 'about',
        'posts_per_page'  => 3
      );

      $get_arg = new WP_Query( $arg );

      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>

    <div class="col-lg-4 col-md-4 abut-inner-img">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
      <div class="abt-sub-txt mt-lg-4 mt-3">
        <?php the_content() ?>
      </div>
    </div>

    <?php } wp_reset_postdata();
    ?>
</div>
</div>
</section>

<!--//about-->
<!--about-two-->
<section>
 <div class="container-fluid text-center">
  <div class="row abt-inner-agile">
   <div class="col-lg-6 col-md-6 two-abut-inner-right pr-0">
    <div class="sub-hedder-right text-left ">
     <h4>Académia Fusión Arte</h4>
     <p class="mt-3"> Desarrolla con nosotos tus habilidades en Danza, Canto, Teatro y Música, estamos en QUILICURA.</p>
   </div>
 </div>
 <div class="col-lg-6 col-md-6 abut-inner-in p-0">
  <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/ab4.jpg"alt="paqueñas bailando ballet">
</div>
</div>
</div>
</div>
</section>

<!--//about-two-->
<!--como contactarnos-->
<section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3">
 <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
  <img id="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3" class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/Logo1.png">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner text-center">
    <div class="carousel-item active client-img">
     <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/f3.jpg">
     <div class="client-matter py-lg-4 py-md-3 py-3">
      <p>ESTAMOS UBICADOS</p>
      <h6 class="pt-lg-3 pt-2">Av. Bernardo O'higgins 518, Quilicura</h6>
    </div>
  </div>
  <div class="carousel-item client-img">
    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/f1.jpg">
    
    <div class="client-matter py-lg-4 py-md-3 py-3">
      <p>CONTÁCTANOS</p>
      <h6 class="pt-lg-3 pt-2">+56 9 7723 9967</h6>
    </div>
  </div>
  <div class="carousel-item client-img">
    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/assets/img/f5.jpg">
    <div class="client-matter py-lg-4 py-md-3 py-3">
      <p>SÍGUENOS EN:</p>
      <h6 class="pt-lg-3 pt-2">FACEBOOK E INSTAGRAM</h6>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">FISIÓN ARTE</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">FISIÓN ARTE</span>
</a>
</div>
</div>
</section>
<!--//como contactarnos -->

<?php get_footer() ?>