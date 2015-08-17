<?php get_header(); ?>

<div class="container-fluid, head">
  <span>Photography</span>
</div>


<div class="container">

<div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php the_title(); ?><span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead"><?php the_content(); ?></p>
        </div>
        <div class="col-md-1">
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



<?php get_footer();?>
