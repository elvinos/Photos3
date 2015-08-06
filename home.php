<?php get_header(); ?>

<div class="container-fluid, head">
  <span>Photography</span>
</div>

<div class="container-fluid, caro">

  <div class="row fill">

      <?php

          $vargs = array(
            'post_type' => 'post',
            'category_name'=> 'Header'
          );

          $the_query1 = new WP_Query( $vargs );

      ?>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php if ( have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>

              <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query1->current_post; ?>" class="<?php if( $the_query1->current_post == 0 ):?>active<?php endif; ?>"></li>

              <?php endwhile; endif; ?>
            </ol>

            <?php rewind_posts(); ?>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <?php if ( have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>

              <div class="item <?php if( $the_query1->current_post == 0 ):?>active<?php endif; ?>">

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'full', true );
                  $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
        </div>

        <?php endwhile; endif; ?>

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>


    </div>

  </div>

<div class="container">

<div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-2">
        </div>
          <div class="col-md-2">
            <div class="hexagon">
                About
                <div class="face1"></div>
                <div class="face2"></div>
                </div>
        </div>
      </div>
<hr class="featurette-divider">

</div>

<?php
  $args = array (
      'post_type'=> 'post'
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
