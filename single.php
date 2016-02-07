<?php get_header(); ?>
<style type="text/css">
.article-content img{width:100%}

</style>
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
            <dd class="pull-right"> <span class="label label-info"><?php the_category('</span> <span class="label label-info">') ?> </span></dd>
          </dl>
          <section class="abstract">
            <p><strong>摘要：</strong><?php echo echo_posts(); ?></p>
          </section>
        </header>
        <section class="article-content" style="font-size:18px">
        <?php the_content(); ?>
        </section>
        <footer>
          <p class="text-important">
          <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/cn/"><img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/3.0/cn/88x31.png" /></a>本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/cn/">知识共享署名-相同方式共享 3.0 中国大陆许可协议</a>进行许可。
          </p>
          <ul class="pager pager-justify">
            
            <?php if (get_previous_post()) { ?>
            <li class="previous">
            <?php previous_post_link('%link');?>
            </li>
            <?php }else{?>
            <li class="previous disabled"><a href="#">没有上一篇 <i class="icon-arrow-left"></i></a></li>
            <?php }?>
            
            <?php if (get_next_post()) { ?>
            <li class="next">
            <?php next_post_link('%link');?>
            </li>
            <?php }else{?>
            <li class="next disabled"><a href="#">没有下一篇 <i class="icon-arrow-right"></i></a></li>
            <?php }?>
            
            
          </ul>
        </footer>
      </article>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>






<?php get_footer(); ?>