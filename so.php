<?php
$keyword=@$_POST['keyword'];
$site_list=@$_POST['site_list'];

switch($site_list){
	case "baidu":
		$url="https://www.baidu.com/s?wd=".$keyword;
		break;
	case "bing":
		$url="http://cn.bing.com/search?q=".$keyword;
		break;
	case "zhihu":
		$url="http://zhihu.sogou.com/zhihu?query=".$keyword;
		break;
	case "segmentfault":
		$url="https://segmentfault.com/search?q=".$keyword;
		break;
	default:
		$url="https://www.baidu.com/s?wd=".$keyword;
		break;
}

header("Location: ".$url);
