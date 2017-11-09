<!-- Displays full blog post page content and styling - loaded from single.php -->

<h1><?php the_title(); ?></h1>

<div class="blog-author-date">
  By <?php the_author(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_date(); ?>
</div>

<?php

  the_content();

?>

<!-- Include comments.php template -->
<?php comments_template(); ?>
