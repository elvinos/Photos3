<?php /*
  Template Name: Treehouse Carousel Template
*/ ?>
<?php get_header(); ?>


    <div class="container-fluid">

      <div class="row fill">

          <?php

              $args = array(
                'post_type' => 'post',
                'category_name'=> 'Header'
      );

              $the_query = new WP_Query( $args );

          ?>

       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                  <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>

                  <?php endwhile; endif; ?>
                </ol>

                <?php rewind_posts(); ?>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                  <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">

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

    </div>

<?php get_footer(); ?>
