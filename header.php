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
      padding: 0.5rem;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }
	img {
		width:100%;
	}
	.out_div{
		width:100%; z-index:999;}
	.fff{
	background-color:#FFF;
	}

  </style>
  	  <script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
      <?php if ( is_home() && !is_paged() ){ ?>
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
	<?php } ?>
</head>
<body  style="background-color: #f1f2f6;">


<?php if ( (is_home()  ) && !is_paged()  ){ ?>
<div class="get">
  <div class="am-g">
    <div class="am-u-lg-12">
      <h1 class="get-title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png"></h1>
      <p>
       <?php bloginfo('description');  ?>
      </p>
    </div>
  </div>
</div>

<?php
wp_nav_menu( 
	array( 
		'container' => 'div',
		'container_class' => 'navbar-skick out_div',
		'menu' => 'now_menu',
		'theme_location' => 'primary', 
		'menu_class' => 'am-nav am-nav-pills am-nav-justify fff', 
		//'walker' => new description_walker() //注意前面要有 new
		) 
	); 
?>

<?php } ?>

<?php if(is_category() ){ ?>

<h1 align="center" style="padding:10px; color:#03C;">#<?php $category = get_the_category(); echo $category[0]->cat_name; ?>#</h1>
<?php } ?>

<div style="top:10px; left:10px; position:fixed;" >
<a href="<?php bloginfo('url'); ?>"><span class="am-icon-home am-icon-md"></span></a> 
</div>

<div class="am-container">






<!--container --> 

