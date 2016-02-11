<?php get_header(); ?>
          
	<div class="row" style="margin-top:10px;">
	  <div class="col-md-8">
      
      	<div class="input-group">
            <span class="input-group-addon fix-border fix-padding"></span>
            <select class="form-control">
              <option value="baidu">百度</option>
              <option value="1"></option>
            </select>
            <span class="input-group-addon fix-border fix-padding"></span>
            <input type="text" class="form-control" placeholder="社区/乡/镇" >
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">搜索</button>
            </span>
          </div>
      
        <section class="items items-hover" style="margin-top:20px;">

  <?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
      <?php $tmp_img=catch_that_image_url_list();?>
          <div class="item">
            <div class="item-heading">
              <div class="pull-right"><?php edit_post_link('<i class="icon-pencil"></i> Edit', ' &#124; ', ''); ?></div>
              <h2 class="text-ellipsis"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
            </div>
            <div class="item-content">
              <?php if($tmp_img){?>
              <div class="media pull-left">
                <img src="<?php echo $tmp_img[0]; ?>" class="media-place-holder" style="width:200px;height:100px;line-height:100px">
              </div>
              <?php } ?>
              <div class="text" style="font-size:18px"><?php echo echo_posts(); ?></div>
            </div>
            <div class="item-footer">
              <?php the_category(',') ?> 
              &nbsp;
              <?php  the_author(); ?>
              <i class="icon-comments"></i> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>&nbsp;
              <span class="text-muted"><?php the_time('Y-m-d H:i'); ?> </span>
            </div>
          </div>
  <?php endwhile; ?>
  <?php //par_pagenavi(9); ?>
<ul class="pager pager-justify">
  <li class="previous"><?php previous_posts_link('上一页'); ?></li>
  <li class="next"><?php next_posts_link('下一页'); ?></li>
</ul>

  <?php else : ?>
  <?php endif; ?>
        </section>
      </div>
      
      <div class="col-md-4">
      <?php get_sidebar(); ?>  
      
      </div>
    </div>

<?php get_footer(); ?>