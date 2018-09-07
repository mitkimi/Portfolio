<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="layui-container theme-container">
    <div class="layui-breadcrumb">
      <a href="/"><?php $this->options->title() ?></a>
      <?php $this->category(','); ?>
      <a><cite><?php $this->title() ?></cite></a>
    </div>
    <div class="clearfix"></div>
    <div class="page-container">
        <div class="text">
            <div class="title">
                <?php $this->title() ?>
            </div>
            <div class="sub-title">
                作者：<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> | 时间：<?php $this->date(); ?> | <?php $this->category(','); ?>
            </div>
            <?php if(  count($this->tags) > 0 ): ?>
            <div class="page-widget">标签：<?php $this->tags(' ', true, '无标签'); ?></div>
            <?php endif; ?>
            <div class="content-detail">
                <?php $this->content(); ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<ul class="post-near" style="display: none;">
    <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
    <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
</ul>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
