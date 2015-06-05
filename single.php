<?php get_header(); ?>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<article class="am-article" style="margin-top:20px;">
  <div class="am-article-hd">
    <h1 class="am-article-title" style="font-weight:bold; color:#000; font-size:4rem;"><?php the_title(); ?></h1>
    <p class="am-article-meta"><?php the_author(); ?></p>
  </div>

  <div class="am-article-bd">
    <p class="am-article-lead"><?php the_content(); ?></p>
  </div>
</article>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

	

<?php get_footer(); ?>