<!-- Start looping all blog posts into a single page -->

<?php

	get_header(); // Gets header.php file

	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() ); // Looks for content.php file to get content

	endwhile; endif;

	get_footer(); // Gets footer.php file

?>
