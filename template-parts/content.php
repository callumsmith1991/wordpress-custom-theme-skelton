


<section class="post">

   <h2>
     <a href='<?php the_permalink() ?>'>
       <?php the_title() ?>
     </a>
   </h2>

     <?php the_post_thumbnail() ?>

     <p>
       <?php echo get_the_author(); ?>
     </p>

     <p>
       <time>
         <?php echo get_the_date(); ?>
       </time>
     </p>

     <?php the_excerpt() ?>

     <?php the_category( ', ' ); ?>

   </section>
