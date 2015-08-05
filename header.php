<!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
          <title>
          <?php wp_title( '|',true, 'right');?>
          <?php bloginfo( 'name' ); ?>
          </title>

          <!-- Bootstrap core CSS -->

            <?php wp_head(); ?>

        </head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>


    <!-- <nav class="nav-main" role="navigation">
      <ul class="menu-toggle">
        <li class="menu-bar bar-1">
        <li class="menu-bar bar-3">
        <li class="menu-bar bar-6">
        <li class="menu-bar bar-7">
      </ul> -->

<div class="container-fluid">

      <nav id="hexNav">
        <div id="menuBtn">
            <svg viewbox="0 0 100 100">
                <polygon points="50 2 7 26 7 74 50 98 93 74 93 26" fill="transparent" stroke-width="4" stroke="#585247" stroke-dasharray="0,0,300"/>
    </svg>
    <div class="bars"></div>
  </div>
<div class="overlay">

      <?php

        $defaults = array(
          'theme_location'  => '',
          'menu'            => '',
          'container'       => 'false',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'nav-linkss',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        );

        wp_nav_menu( $defaults );

        ?>

      <!-- <ul class="nav-links">
          <li class="nav-link link-1"><a href="#" data-section="1">Newt Gingrinch</a></li>
          <li class="nav-link link-2"><a href="#" data-section="2">Kermit</a></li>
          <li class="nav-link link-3"><a href="#" data-section="3">Wembley</a></li>
          <li class="nav-link link-4"><a href="#" data-section="4">Wicket</a></li>
        </ul> -->
      <!-- </nav>
    </div> -->

  </div>
  </nav>
  </div>
