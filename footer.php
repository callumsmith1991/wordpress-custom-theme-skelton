
</main> <!-- site content -->

</div> <!-- site content -->

<footer id='site-footer'>
  <div class="row">
    <div class="small-12 medium-4 large-4 columns">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Area left") ) : ?>
      <?php endif;?>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Area Middle") ) : ?>
      <?php endif;?>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Area Right") ) : ?>
      <?php endif;?>
    </div>
  </div>

</footer>

<?php wp_footer() ?>
</body>
</html>
