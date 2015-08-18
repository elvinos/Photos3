
<?php

/*
Template Name: category-images
*/
 get_header(); ?>


<div id="site-wrapper">

  <?php if  ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid" id="centre-buttons">


<span class= "button">
  <?php previous_post_link ('%link', '<nav class="btn btn-lg" id="big-sexy"><i class="glyphicon glyphicon-chevron-left"></i> </nav>', TRUE ); ?>
  <a href="<?php bloginfo('url'); ?>"> <span class="glyphicon glyphicon-th"></span></a>
  <?php next_post_link ('%link', '<nav class="btn btn-lg"><i class="glyphicon glyphicon-chevron-right"></i> </nav>', TRUE ); ?>
</span>
<nav class="toggle-nav btn btn-lg" id="big-sexy"><i class="glyphicon glyphicon-info-sign"></i> </nav>
  </div>

        <div id="site-canvas">





<?php
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
?>
<div class="container-fluid">

 <div class="imgBox">

<img src="<?php echo $thumbnail_url[0]; ?>" id="singleImage">
<!-- </a> -->
</div>
</div>
<div class="container-fluid" id="site-menu">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>


</div>
</div><!-- #site-canvas -->


<?php endwhile; else:?>

<div class="page-header">
<h1>Oh no!</h1>
</div>

<p>No content is appearing in this space</p>

<?php endif; ?>

</div><!-- #site-wrapper> -->





<?php get_footer();?>
