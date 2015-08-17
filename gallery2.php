<?php
/*
Template Name: Gallerys
*/

?>
<?php get_header(); ?>



<div class="container-fluid" id="grid">

  <div class="grid">

    <?php
      $args = array (
          'post_type'=> 'post'
        );
      $the_query = new WP_Query( $args );

    ?>

        <?php if ( have_catergories() ) : while ($the_query->have_catergories() ): $the_query->the_category(); ?>
        <?php
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'large', true );
        ?>

   <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="">
        <div class="block-inner ">
          <a href="<?php the_permalink(); ?>"class="block-content">
            <div class="content-rollover no-caption">

              <div class="background">
                <img src="<?php echo $thumbnail_url[0]; ?>">
              </div>

              <div class="caption block-padding colour-light">
                <span style="color:inherit"><?php the_title(); ?></span>
              </div>

            </div>
          </a>
        </div>
      </div>

      <?php $portfolio_count = $the_query->current_post +1; ?>
      <?php endwhile; endif;?>





      <!-- <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="" >
        <div class="block-inner ">
          <a href="http://wearefounded.com/projects/futsal/" class="block-content">
            <div class="content-rollover no-caption" style="background-color: transparent !important">

              <div class="background">
                <img class="" src="http://wearefounded.com/wp-content/uploads/2015/03/Futsal_Main-1000x563.jpg"/>
              </div>

              <div class="caption block-padding colour-light">
                <span style="color:inherit">Futsal</span>
              </div>

            </div>
          </a>
        </div>
      </div>



      <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="" >
        <div class="block-inner ">
          <a href="http://wearefounded.com/projects/baltic-pv/" class="block-content">
            <div class="content-rollover no-caption" style="background-color: transparent !important">

              <div class="background">
                <img class="" src="http://wearefounded.com/wp-content/uploads/2014/09/BalticPrivate_1-960x540.jpg"/>
              </div>

              <div class="caption block-padding colour-light">
                <span style="color:inherit">BALTIC Private View</span>
              </div>

            </div>
          </a>
        </div>
      </div>



      <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="">
        <div class="block-inner ">
          <a href="http://wearefounded.com/projects/hammer/" class="block-content">
            <div class="content-rollover no-caption" style="background-color: transparent !important">

              <div class="background">
                <img class="" src="http://wearefounded.com/wp-content/uploads/2015/01/NewNewNew1-1000x563.jpg"/>
              </div>

              <div class="caption block-padding colour-light">
                <span style="color:inherit">Hammer</span>
              </div>

            </div>
          </a>
        </div>
      </div>



      <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="" >
        <div class="block-inner ">
          <a href="http://wearefounded.com/projects/baltickitchen/" class="block-content">
            <div class="content-rollover no-caption" style="background-color: transparent !important">

              <div class="background">
                <img class="" src="http://wearefounded.com/wp-content/uploads/2014/08/BALTIC-Kitchen-1-960x540.jpg"/>
              </div>

              <div class="caption block-padding colour-light">
                <span style="color:inherit">BALTIC Kitchen</span>
              </div>

            </div>
          </a>
        </div>
      </div>



      <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="" >
        <div class="block-inner ">
          <a href="http://wearefounded.com/projects/ryan-edy/" class="block-content">
            <div class="content-rollover no-caption" style="background-color: transparent !important">

              <div class="background">
                <img class="" src="http://wearefounded.com/wp-content/uploads/2015/03/ryan-edy-31-1000x563.jpg"/>
              </div>

              <div class="caption block-padding colour-dark">
                <span style="color:inherit">Ryan Edy</span>
              </div>

            </div>
          </a>
        </div>
      </div> -->
</div>
</div>




<?php get_footer();?>
