<?php get_header(); ?>

<div class="am-g am-g-fixed" style="margin-top:10px;">
  <?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div class="am-u-md-4">
	<div class="am-thumbnail">
      <?php $tmp_img=catch_that_image(); 
	  echo $tmp_img['img'];
	  $from=$tmp_img['url'];;
	  ?>
      <div class="am-thumbnail-caption">
        <h2 class="divout" style="margin:0px;padding:0px; "><a href="<?php echo $from;?>"> <?php the_title(); ?></a></h2>
        <div><?php echo echo_posts(); ?></div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php //par_pagenavi(9); ?>


  <?php else : ?>
  <?php endif; ?>
  
</div>

  <ul class="am-pagination">
  <li class="am-pagination-prev"><?php previous_posts_link('上一页'); ?></li>
  <li class="am-pagination-next"><?php next_posts_link('下一页'); ?></li>
</ul>
<?php get_footer(); ?>
