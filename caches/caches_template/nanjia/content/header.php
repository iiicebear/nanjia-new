<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo CSS_PATH;?>style/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
</head>
<body>
<div id="header">
    <div id="logo"><img src="<?php echo IMG_PATH;?>nanjia/logo.png" alt=""></div>
    <div id="companyName">南加州医疗管理集团</div>
    <div id="tel"><img src="<?php echo IMG_PATH;?>nanjia/tel.png" alt=""><span>010-5895-1492</span></div>
</div>
<div class="clear"></div>
<div id="nav">
    <ul class="navbar">
        <li><a href="<?php echo $CATEGORYS['1']['url'];?>">首页</a></li>
        <li><a href="">南加门诊</a></li>
        <li><a href="">特色项目</a></li>
        <li><a href="">资源优势</a></li>
        <li><a href="<?php echo $CATEGORYS['2']['url'];?>">关于我们</a></li>
        <li><a href="">联系我们</a></li>
        <li><a href="">招贤纳士</a></li>
    </ul>
</div>