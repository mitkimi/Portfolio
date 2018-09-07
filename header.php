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
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/layui/css/layui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/swiper/css/swiper.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('markdown.css'); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css">
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
<div class="header-container">
    <div class="layui-container">
        <div class="logo-container">
            <?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>
                <a id="logo-text" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                <p class="description" style='display:none'><?php $this->options->description() ?></p>
            <?php endif; ?>
        </div>
        <ul class="layui-nav layui-layout-right">
            <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
            <?php while($categorys->next()): ?>
                <?php if ($categorys->levels === 0): ?>
                    <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                    <?php if (empty($children)) { ?>
                        <li <?php if($this->is('category', $categorys->slug)): ?> class="layui-nav-item layui-this" <?php else: ?> class="layui-nav-item" <?php endif; ?> >
                          <a href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a>
                        </li>
                    <?php } else { ?>
                        <li class="layui-nav-item">
                          <a href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a>
                          <dl class="layui-nav-child">

                            <?php foreach ($children as $mid) { ?>
                                <?php $child = $categorys->getCategory($mid); ?>
                                <dd><a href="<?php echo $child['permalink'] ?>"><?php echo $child['name']; ?></a></dd>

                            <?php } ?>

                          </dl>
                        </li>

                    <?php } ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li 
                    <?php if($this->is('page', $pages->slug)): ?>
                        class="layui-nav-item layui-this" 
                    <?php else: ?>
                        class="layui-nav-item" 
                    <?php endif; ?> 
                >
                    <a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                </li>
            <?php endwhile; ?>
            <li class="layui-nav-item">
                <form class="layui-btn-group" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search" style="border:0;margin:0;padding:0;">
                    <input type="text" id="s" name="s" class="layui-input" placeholder="<?php _e('输入关键字搜索'); ?>" style="width: 200px;display:inline-block;border:0;border-radius: 2px 0 0 2px;margin-right:-5px;"/>
                    <button type="submit" class="layui-btn layui-btn-primary" style="display: inline-block;margin-top:-2px;border:0;border-left:1px solid #ccc;"><?php _e('搜索'); ?></button>
                </form>
            </li>
        </ul>
    </div>
</div>

    
    
