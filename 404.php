<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="layui-container theme-container">
    <div class="layui-breadcrumb">
      <a href="/"><?php $this->options->title() ?></a>
      <a><cite>404</cite></a>
    </div>
    <div class="nothing-container">
        <div class="pic-container">
            <img src="<?php $this->options->themeUrl('./img/404.png'); ?>" style="width: 50%;height: 50%"/>
        </div>
        <p>没有此页面</p>
    </div>
</div>
    <?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
