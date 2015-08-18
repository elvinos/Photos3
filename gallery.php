<?php
/*
Template Name: Gallery
*/

?>
<?php get_header(); ?>



<div class="container-fluid" id="grid">
  <div class="container-fluid" id="Gallery-Nav">
  <!-- <a  class="btn-default btn-lg" id="Home-Button" ><span class="glyphicon glyphicon-home"></span> </a> -->
  <a id="Home-Button" ><span class="glyphicon glyphicon-home"></span> </a>
</div>


  <div class="grid">

    <?php
      $args = array(
      'orderby' => 'name',
      'order' => 'ASC'
      );
      $categories = get_categories($args);
      foreach($categories as $category) {
        $term_id = $category->term_id;
        $image   = category_image_src( array('term_id'=>$term_id) , false );
        $name = $category->name;
        $category_id = get_cat_ID( 'Category Name' );
        $category_link = get_category_link( $category_id );
?>

        <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="">
             <div class="block-inner ">
               <a href="<?php echo esc_url( $category_link ); ?>" class="block-content">
                 <div class="content-rollover no-caption">

                   <div class="background">

                     <img src="<?php echo $image; ?>">
                   </div>

                   <div class="caption block-padding colour-light">
                     <span style="color:inherit"><?php echo $name?></span>
                   </div>
                 </div>
               </a>
               </div>
             </div>


      <?php } ?>

</div>
</div>




<?php get_footer();?>
