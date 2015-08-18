<?php get_header(); ?>

<div class="container" id='archivetop'>

<div class="row featurette">
        <div class="col-md-7">
          <h1 class="featurette-heading"><?php wp_title(''); ?> </h1>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
        <?php $image   = category_image_src( array('term_id'=>$term_id) , false ); ?>
        <img id="catImage" src="<?php echo $image; ?>">
        </div>
      </div>
<hr class="featurette-divider">

</div>



<div class="container-fluid">

      <ul id="categories" class="clr">
            <?php if  ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'large', true );
      ?>
      <li>
        <div class="Hex">
        <a class="imageHex" href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>"></a>
      </div>
      </li>

    <?php endwhile; else:?>

    <div class="page-header">
      <h1>Oh no!</h1>
    </div>

    <p>No content is appearing in this space</p>

    <?php endif; ?>

    </div>




<?php get_footer();?>
