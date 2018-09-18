<?php get_header(); ?>

<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>

<?php single_cat_title( '', false ); ?>


<?php
// Display optional category description
 if ( category_description() )  {
   echo category_description();
 }

 ?>

<div class="row">

  <div class="small-12 medium-6 large-9 columns">

<?php

// The Loop
while ( have_posts() ) : the_post(); ?>

<section class="post">

<h2>
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <?php the_title(); ?>
  </a>
</h2>

<small>
  <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
</small>


<?php the_content(); ?>

</section>

<?php endwhile;

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>

</div>



<div class="small-12 medium-6 large-3 columns">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>
