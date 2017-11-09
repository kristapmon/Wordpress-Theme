<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
  wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/jQuery.js', array( 'jquery' ), true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );
?>


<!-- Comment section content formatting -->

<?php
  function custom_comment($comment, $args, $depth) {
      $GLOBALS['comment'] = $comment; //What does this do?
?>

<li class="comment-single-section" >

  <!-- Display commenters avatar & name -->
  <div class="comment-author-section">
      <div class="comment-author-avatar"><?php echo get_avatar($comment, 80 ); // Get comment author avatar from ID/email ?> </div>
      <div class="comment-author-name"><?php printf(__('%s'), get_comment_author()) ?></div>
  </div>

  <!-- Display message if comment is awaiting admin approval -->
  <?php if ($comment->comment_approved == '0') : ?>
    <em><php _e('Your comment is awaiting moderation.') ?></em><br />
  <?php endif; ?>

  <!-- Display comment content  -->
  <div class="comment-content">
    <?php comment_text(); ?>
  </div>

  <!-- Display Reply button & comment replies -->
  <?php
  // Test nested comments depth
  if ( $depth < $args['max_depth'] ) : ?>

    <!-- Display comment reply -->
    <div class="comment-reply">
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>

  <?php endif; } ?>
