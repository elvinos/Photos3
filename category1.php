<?php


get_header(); ?>

<div class="container-fluid">

<div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-2">
        </div>
          <div class="col-md-2">

                </div>
        </div>
      </div>
<hr class="featurette-divider">

</div>

<?php
  $args = array (
      'post_type'=> 'post',
      'posts_per_page'   => 100,
    );
  $the_query = new WP_Query( $args );

?>

<div class="container-fluid">
    <ul id="categories" class="clr">
    <?php if ( have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
    <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'large', true );
    ?>
    <li>
      <div class="Hex">
      <a class="imageHex" href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>"></a>
    </div>
    </li>
    <?php $portfolio_count = $the_query->current_post +1; ?>
    <?php endwhile; endif;?>
    </ul>

</div>


<?php get_footer();?>
