<?php get_header(); ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<article class="article">
        <header>
          <h1 class="text-center"><?php the_title(); ?></h1>
          <dl class="dl-inline">
            <dt>发布时间：</dt>
            <dd><?php the_time('Y-m-d H:i'); ?></dd>
            <dt>作者：</dt>
            <dd><?php  the_author(); ?> </dd>
            <dt></dt>
            <dd class="pull-right"><span class="label label-success">NEW</span> <span class="label label-warning">火爆</span> <span class="label label-info">原创</span> <span class="label label-danger"><i class="icon-eye-open"></i> 235</span></dd>
          </dl>
          <?php if(the_excerpt()){?>
          <section class="abstract">
            <p><strong>摘要：</strong><?php the_excerpt();?></p>
          </section>
          <?php }?>
        </header>
        <section class="article-content" style="font-size:18px">
        <?php the_content(); ?>
        </section>
        <footer>
          <p class="pull-right text-muted">
            发布时间：2013年11月7日 16:44:21 &nbsp;点击数：234
          </p>
          <p class="text-important">本文版权所有归<a href="###">@catouse</a></p>
          <ul class="pager pager-justify">
            <li class="previous"><a href="#"><i class="icon-arrow-left"></i> 论烧火煮饭</a></li>
            <li><a href="#"><i class="icon-list-ul"></i> 目录</a></li>
            <li class="next disabled"><a href="#">没有下一篇 <i class="icon-arrow-right"></i></a></li>
          </ul>
        </footer>
      </article>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>



<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<header class="am-g my-head" style="margin-top: 40px; text-align: center;">
  <div class="am-u-sm-12 am-article">
    <h1 class="am-article-title"><?php the_title(); ?></h1>
    <p class="am-article-meta"><?php the_author(); ?></p>
  </div>
</header>
<hr class="am-article-divider"/>


<div class="am-g am-g-fixed">
	
  <div class="am-u-md-10 am-u-md-push-1">
    <div class="am-g">
      <div class="am-u-sm-11 am-u-sm-centered">
        <div class="am-cf am-article">
        
        <p>
        <?php $img_url=get_post_meta($post -> ID, "img_url", true); 
        if($img_url){
        ?>
        <img src="<?php echo $img_url;?>" style="width:100%" />
        <?php } ?>
        </p>


          
        </div>
        <hr/>
        <div class="am-cf">
          <div class="am-fl"><?php echo previous_post_link('&lt;%link','%title',true,''); ?></div>
          <div class="am-fr"><?php echo next_post_link('%link&gt;','%title',true,''); ?></div>
        </div>
        <hr />
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php the_ID(); ?>" data-title="<?php the_title(); ?>" data-url="<?php the_guid(); ?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"nextbig"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->


      </div>
    </div>
  </div>

</div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>





<?php get_footer(); ?>