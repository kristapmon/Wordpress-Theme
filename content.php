<!-- Displays Blog Post Index page content and styling - loaded by index.php -->

<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<div class="blog-author-date">
  By <?php the_author(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_date(); ?>
</div>

<?php the_excerpt(); ?>
