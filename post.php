<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
<el-main>
    <el-breadcrumb separator-class="el-icon-arrow-right" class="breadcrumb">
        <el-breadcrumb-item :to="{ path: '/' }"><?php $this->options->title() ?></el-breadcrumb-item>
        <el-breadcrumb-item><?php $this->category(' / '); ?></el-breadcrumb-item>
        <el-breadcrumb-item><?php $this->title() ?></el-breadcrumb-item>
        
    </el-breadcrumb>
    <el-card>
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
    </el-card>
</el-main>

<ul class="post-near" style="display: none;">
    <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
    <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
</ul>

<script>
    // localStorage.navIndex = 
</script>
<?php
    print_r($this);
?>
<?php $this->need('footer.php'); ?>
