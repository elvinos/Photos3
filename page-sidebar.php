<?php
/*
Template Name: Page With Sidebar
*/

?>

<?php get_header(); ?>


    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-md-9">
           <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Sidebar</button>
          </p>
          <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                ?>

                <span><a href="<?php the_permalink(); ?>" class="thumbnail"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></a></span>

        </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <h1><?php the_title(); ?></h1>
           <?php the_content(); ?>
           <?php next_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
           <a href="<?php bloginfo('url'); ?>"> <span class="glyphicon glyphicon-th"></span>
           <?php previous_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
          </div>

      </div>
    </div>
</div>
<?php get_footer(); ?>
