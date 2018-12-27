<html>

  <head>

    <?php

      wp_head(); // Prints scripts or data in the head tag on the front end

    ?>

  </head>

  <body>

    <div class="row navigation-cover">

      <div class="one-third column site-title" >
        <a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
      </div>

      <div class="one-third column" align="center">

        <div class="navigation">

          <?php

            wp_list_pages( '&title_li=' ); // Gets the list of Pages and displays in the navigation

          ?>

        </div>

      </div>

      <div class="one-third column site-additional-link">
        <a href = "https://kristapsbezbailis.us17.list-manage.com/subscribe/post?u=691797bab4dc502fcb95aa08c&id=cf73f5d643">Mailing list</a>

      </div>

    </div>

    <div class="container">
