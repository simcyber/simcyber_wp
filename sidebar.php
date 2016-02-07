<div class="panel">
  <div class="panel-body">
<?php bloginfo('description'); ?>
  </div>
</div>


<ul class="list-group">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
<?php _e(’Categories’); ?>
    <ul class="list-group">
    <?php wp_list_cats(); ?> 
    </ul>
<?php endif; ?>
</ul>