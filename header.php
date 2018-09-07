<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('markdown.css'); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css">
    <script src="<?php $this->options->themeUrl('./assets/vue.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('./assets/elementui.js'); ?>"></script>

    <style>
        .hljs {
            background:transparent;
            padding: 0.5em 0;
        }
    </style>

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="app">
    <el-header style="height: 61px;">
      <a href="/">
        <div class="logo pull-left"><?php $this->options->title() ?><em><?php $this->options->description() ?></em></div>
      </a>
      <div class="pull-right" style="padding-top: 10px;">
        <form class="layui-btn-group" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search" style="border:0;margin:0;padding:0;">
          <el-input type="text" id="s" name="s" placeholder="搜索" v-model="input5" class="input-with-select">
              <el-button type="submit" slot="append" icon="el-icon-search"></el-button>
          </el-input>
        </form>
      </div>
      <el-menu :default-active="activeIndex" class="pull-right" mode="horizontal" @select="handleSelect">
      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
          <el-menu-item index="<?php $pages->title(); ?>" onclick="location.href='<?php $pages->permalink(); ?>'"><?php $pages->title(); ?></el-menu-item>
        <?php endwhile; ?>
      </el-menu>
      <div class="clear"></div>
    </el-header>
    
    <el-container class="main-container">
