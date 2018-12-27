<!-- Displays Blog Post Index page content and styling - loaded by index.php -->

<div class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

<div class="blog-author-date">
  By <?php the_author(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_date(); ?>
</div>

<?php the_excerpt(); ?>
