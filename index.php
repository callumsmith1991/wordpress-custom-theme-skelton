<?php get_header() ?>

<div class="row">
  <div class="small-12 medium-8 large-9 columns">

   <main class="blog-content">

<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', '' );
		}
	}
	else {
		get_template_part( 'template-parts/content', 'none' );
	}
?>

</div>


<div class="small-12 medium-4 large-3 columns">

<?php get_sidebar(); ?>

</div>

</main>

</div>



<?php get_footer() ?>
