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



<?php
    // Custom comments
    function custom_comment($comment, $args, $depth) {

      //What does this do?
       $GLOBALS['comment'] = $comment; ?>

        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

            <div class="comment-intro">
                <?php echo get_avatar($comment, 80 ); // Gets commenters gravatar from ID or email ?>
                <?php printf(__('%s'), get_comment_author()) ?>

            </div>

            <?php if ($comment->comment_approved == '0') : ?>
                <em><php _e('Your comment is awaiting moderation.') ?></em><br />
            <?php endif; ?>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

<?php } ?>
