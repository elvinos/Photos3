<?php get_header(); ?>
<div class="site-wrapper">

</div>
<div class="container-fluid">

<div class="page-body">

<div class="row">

  <?php if  ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-sm-8 portfolio-image">
        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
      ?>

      <span><a href="<?php the_permalink(); ?>" class="thumbnail"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></a></span>
    </div>

    <div class="text-col col-sm-4">
    <h1><?php the_title(); ?></h1>
     <?php the_content(); ?>
     <?php next_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
     <a href="<?php bloginfo('url'); ?>"> <span class="glyphicon glyphicon-th"></span>
     <?php previous_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
    </div>

  <?php endwhile; else:?>

  <div class="page-header">
    <h1>Oh no!</h1>
  </div>

  <p>No content is appearing in this space</p>

  <?php endif; ?>


</div>

</div>
</div>
</div>

<?php get_footer(); ?>
