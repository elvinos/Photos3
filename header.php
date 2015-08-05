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

  <nav id="hexNav">
    <div id="menuBtn">
      <svg viewbox="0 0 100 100">
        <polygon points="50 2 7 26 7 74 50 98 93 74 93 26" fill="transparent" stroke-width="4" stroke="#585247" stroke-dasharray="0,0,300"/>
      </svg>
      <span></span>
    </div>
  <div class="overlay">

    <!-- <div class="text">
      <ul>
        <li>Pizzas</li>
        <li>Tacos</li>
        <li>Burger</li>
      </ul>
    </div>
  </div>
  </nav> -->


      <?php

        $defaults = array(
          'theme_location'  => '',
          'menu'            => '',
          'container'       => 'false',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'nav-links',
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
        </div>
      </nav>
