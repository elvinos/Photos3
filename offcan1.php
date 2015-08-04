<?php
/*
Template Name: Offcan1
*/
 ?>

<?php get_header(); ?>


<!-- Wanting to put a toggle button on the side of the image so the image shrinks and goes flush with the side of the page on a click  -->
<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-md-9">
           <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Sidebar</button>
          </p>
        <div class="page-header">
          <h1>Hello World </h1>
        </div>

<div class="container- fluid">
  <div class="text-center">

  <img id="offcanimg" src="<?php echo get_stylesheet_directory_uri() ?>/img/amasta.jpeg" />
</div>
</div>





<?php get_footer(); ?>
