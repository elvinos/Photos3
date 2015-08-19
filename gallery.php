<?php
/*
Template Name: Gallery
*/

?>
<?php get_header(); ?>



<div class="container-fluid" id="grid">
<nav class="toggle-nav btn btn-lg" id="Gallery-Toggle"><i class="glyphicon glyphicon-info-sign"></i> </nav>
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
      ?>

        <div class="block full medium-half large-one-third type-image" data-order="" data-order-medium="" data-order-large="">
             <div class="block-inner ">
               <a href="<?php the_permalink(); ?>" class="block-content">
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
