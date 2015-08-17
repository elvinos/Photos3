<?php
/*
Template Name: Archive
*/

?>
<?php get_header(); ?>

<?php
if (function_exists('category_image_src')) {
$category_image = category_image_src( array( 'size' => 'full' ) , false );
} else {
$category_image = '';
}
?>

<div class="container-fluid" id="grid">

  <div class="grid">



   <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="">
        <div class="block-inner ">
          <a href="http://wearefounded.com/projects/generation/" class="block-content">
            <div class="content-rollover no-caption">

              <div class="background">
                <?php if ($category_image) : ?>

                <!-- category featured image -->
                <img src="<?php echo $category_image; ?>" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>"/>

                <?php endif; ?>
              </div>

              <div class="caption block-padding colour-light">
                <span style="color:inherit">GENERATION</span>
              </div>

            </div>
          </a>
        </div>
      </div>



      <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="" >
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
      </div>
</div>
</div>




<?php get_footer();?>
