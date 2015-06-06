<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
<title>
<?php if ( is_home() && !is_paged() ){ bloginfo('name'); ?>
|
<?php bloginfo('description'); } ?>
<?php if (is_single() || is_page()) { ?>
<?php wp_title('',true); ?>
|
<?php bloginfo('name'); } ?>
<?php if ( is_paged() ){ ?>
<?php printf( __('第%1$s页', ''), intval( get_query_var('paged')), $wp_query->max_num_pages); ?>|
<?php bloginfo('name'); } ?>
<?php if(is_category()) { $category = get_the_category(); echo '分类'.$category[0]->cat_name.'下的文章';  ?>
|
<?php bloginfo('name');  } ?>
<?php if(is_search()) { echo '包含关键字 '.$s.' 的文章';  ?>
|
<?php bloginfo('name'); } ?>
<?php if(is_tag()) { echo '标签'.single_tag_title("", true).'下的文章';  ?>
|
<?php bloginfo('name'); } ?>
<?php if(is_author()) { echo wp_title().'发布的文章';  ?>
|
<?php bloginfo('name'); } ?>
</title>
<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.3.0/css/amazeui.min.css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<style type="text/css">
.divout {
	white-space: nowrap;
	word-wrap:break-word;
	overflow: hidden;
	-ms-text-overflow: ellipsis;
	-o-text-overflow: ellipsis;
	-webkit-text-overflow: ellipsis;
	text-overflow: ellipsis;
}
.listout {
	list-style:circle;
	white-space: nowrap;
	word-wrap:break-word;
	overflow: hidden;
	-ms-text-overflow: ellipsis;
	-o-text-overflow: ellipsis;
	-webkit-text-overflow: ellipsis;
	text-overflow: ellipsis;
}
</style>
<style>
    .get {
      background: #1E5B94;
      color: #fff;
      text-align: center;
      padding: 5rem 0;
    }

    .get-title {
      font-size: 9rem;
      padding: 0.5rem;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

  </style>
  	  <script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stickUp.min.js"></script>
      <script type="text/javascript">
              //initiating jQuery
              jQuery(function($) {
                $(document).ready( function() {
                  //enabling stickUp on the '.navbar-wrapper' class
                  $('.navbar-skick').stickUp({
                      //enabling marginTop with the 'auto' setting 
                      marginTop: 'auto'
                    })
                });
              });

      </script>

</head>
<body  style="background-color: #f1f2f6;">



<div class="get">
  <div class="am-g">
    <div class="am-u-lg-12">
      <h1 class="get-title"><?php bloginfo('name'); ?></h1>

      <p>
       发现有趣的新产品
      </p>

    </div>
  </div>
</div>

<!--<header class="am-topbar navbar-skick">
  <h1 class="am-topbar-brand">
    <a href="<?php bloginfo('url'); ?>" style="font-size:35px; line-height:51px;">首页</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">

    <form class="am-topbar-form am-topbar-left am-form-inline" id="search" action="<?php bloginfo('url'); ?>"  method="get" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="关键词" name="s">
      </div>
      <button type="submit" class="am-btn am-btn-primary am-topbar-btn am-btn-md">搜索</button>
    </form>

 

    <div class="am-topbar-right">
    
    <div class="bsync-custom icon-blue am-btn am-btn-primary am-topbar-btn am-btn-sm"><a title="一键分享到各大微博和社交网络" class="bshare-bsync " onclick="javascript:bSync.share(event)" style="color:#FFF;">分享</a><span class="BSHARE_COUNT bshare-share-count">0</span></div>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bsync.js#uuid=#uuid=&amp;style=1"></script>
     
    </div>
  </div>
</header>-->

<div class="navbar-skick" style="width:100%; z-index:999;">

<ul class=" am-nav am-nav-pills am-nav-justify" style=" background-color:#FFF;">
  <li class="am-active"><a href="#">首页</a></li>
  <li><a href="#">开始使用</a></li>
  <li><a href="#">按需定制</a></li>
  <li><a href="#">加入我们</a></li>
</ul>
</div>

<div class="am-container">






<!--container --> 

