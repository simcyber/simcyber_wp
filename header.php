<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<!-- zui -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/zui.min.css" rel="stylesheet">
	<!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<!-- ZUI Javascript组件 -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/zui.min.js"></script>
	<!--[if lt IE 9]>
	  <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/ieonly/html5shiv.js"></script>
	  <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/ieonly/respond.js"></script>
	  <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/ieonly/excanvas.js"></script>
	<![endif]-->

    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
</head>
<body>
    <!--[if lt IE 8]>
        <div class="alert alert-danger">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
    <![endif]-->
      <style type="text/css">
		.navbar{
			background-color:#057d9f;
		}
		.navbar a{
			color:#FFF;
		}
		.navbar li a{
			color:#FFF;
		}
		.dropdown-menu li a{
			color:#000;
		}
	  </style>
	  <nav class="navbar" role="navigation" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-collapse-example">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php bloginfo('url'); ?>">首页</a></li>
            <li><a href="{:U('Zhuanlan/index')}">周刊</a></li>
          </ul>
          <div class="navbar-form navbar-right" role="search">
          	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <div class="form-group">
              <input type="text" id="s" name="s" class="form-control" placeholder="请输入关键词">
            </div>
            <button  class="btn btn-default" id="menu_search">搜索</button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </nav>
    <div class="container">