<?php get_header() ?>


<div class="row">
<div class="small-12 medium-7 large-9 columns">




<?php if(have_posts() ) {
  while(have_posts() ) { ?>

    <main class="page-content">

      <?php the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>

    </main>



<?php

  }

  wp_reset_postdata();

}




?>

</div>

<div class="small-12 medium-5 large-3 columns">

<?php get_sidebar(); ?>

</div>


<?php get_footer() ?>
