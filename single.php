<?php
/*
Template Name: Offcan
*/
 ?>

<?php get_header(); ?>



  <div id="site-wrapper">

          <div id="site-canvas">

            <?php if  ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- <a href="#" class="toggle-nav btn btn-lg" id="big-sexy"><i class="glyphicon glyphicon-plus"></i> </a> -->
            <nav class="toggle-nav btn btn-lg" id="big-sexy"><i class="glyphicon glyphicon-plus"></i> </nav>


  <div id="site-menu">
  <h1><?php the_title(); ?></h1>
   <?php the_content(); ?>
   <?php next_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
   <a href="<?php bloginfo('url'); ?>"> <span class="glyphicon glyphicon-th"></span>
   <?php previous_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
  </div>

  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
?>
<div class="container-fluid">

   <div class="imgBox">
<!-- <a href="<?php the_permalink(); ?>" class="thumbnail"> -->
<img src="<?php echo $thumbnail_url[0]; ?>">
<!-- </a> -->

</div>
</div>
</div><!-- #site-canvas -->


<?php endwhile; else:?>

<div class="page-header">
  <h1>Oh no!</h1>
</div>

<p>No content is appearing in this space</p>

<?php endif; ?>

</div><!-- #site-wrapper> -->

<?php get_footer(); ?>
