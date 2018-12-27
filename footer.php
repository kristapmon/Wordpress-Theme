
  </div>

<div class="row footer-cover">
  <div class="column" align="center">

    <div class="footer-navigation">

      <?php

        wp_list_pages( '&title_li=' ); // Gets the list of Pages and displays in the navigation

      ?>

    </div>

  </div>

  <div class=footer-copyright>
    Copyright © <?php echo date("Y");?>
  </div>

</div>

<?php

  wp_footer(); // Prints scripts or data before the closing body tag on the front end

?>
</body>

</html>
