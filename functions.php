<?php
register_nav_menus();

if ( function_exists('register_sidebar') )
    register_sidebar();
	
function catch_that_image() { 
	global $post, $posts; 	
	$from=get_post_meta($post -> ID, "from", true);
	if($from){
		
	}else{
		$from=$post->guid;
	}
	$img_url=get_post_meta($post -> ID, "img_url", true); 
	if($img_url){
		$first_img = '<a href="'.$from.'" title="'.$post->post_title.'"><img src="'.$img_url.'"  width="100%" class="img-rounded" /></a>';
		
	}else{
		
	
	$first_img = ''; 	
	ob_start(); 	
	ob_end_clean(); 	
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches); 	
	$first_img = $matches [1] [0]; 	
	if(empty($first_img)){	
	$first_img = NULL;//bloginfo('template_url'). '/images/default-thumb.jpg';  	
	} 
	else{
		$img_url=$first_img;
	
		$first_img = '<a href="'.$from.'" title="'.$post->post_title.'"><img src="'.$first_img.'"  width="100%" class="img-rounded" /></a>';
		
	
	}
	
	}
	$out['img']=$first_img;
	$out['url']=$from;
	$out['img_url']=$img_url;

	
	return $out;
}

function catch_that_image_url_list() { 
	global $post, $posts; 	
	$first_img = ''; 	
	ob_start(); 	
	ob_end_clean(); 	
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches); 	
	$first_img = $matches [1]; 	
	if(empty($first_img)){	
	$first_img = NULL;//bloginfo('template_url'). '/images/default-thumb.jpg';  	
	}
	return $first_img;
}

function echo_posts() { 
	global $post, $posts; 	
	ob_start(); 	
	ob_end_clean(); 
	$search="|<li>(.*?)</li>|";
	$ex=$post->post_excerpt;
	$content=$post->post_content;
	if($ex){
		return $ex;
	}else{
		return mb_substr(strip_tags($content),0,180)."...";
	}

}

function echo_buy_url() { 
	global $post, $posts; 	
	ob_start(); 	
	ob_end_clean(); 
	$output = preg_match_all('|{buy:[a-zA-z]+://[^\s]*(?=})|', $post->post_content, $matches); 	
	$url = $matches [0] [0]; 
	$url=str_replace("{buy:","",$url);
	if($url){
	$url="<a href='".$url."' class=\"btn btn-success pull-right btn-sm\" target='_blank'>购买链接</a>";
	}else{
	$url="";
	}
	return $url;
}

function echo_body(){
	global $post, $posts; 	
	ob_start(); 	
	ob_end_clean(); 
	$tmp=strip_tags($post->post_content,"<br><p><strong><blockquote><div><a><small>");
	return $tmp;
}


function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
	previous_posts_link(' 上一页 ');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link(' 下一页 ');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}}
}