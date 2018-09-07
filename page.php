<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="layui-container theme-container">
	<div class="layui-breadcrumb">
	  <a href="/"><?php $this->options->title() ?></a>
	  <a><cite><?php $this->title() ?></cite></a>
	</div>
	<div class="clearfix"></div>
		<div class="page-container">
		<div class="text">
			<div class="title">
				<?php $this->title() ?>
			</div>
			<div class="sub-title"></div>
			<div class="content-detail">
				<?php $this->content(); ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- end #main
<div class="col-mb-12 col-8" id="main" role="main" style="display:none;">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div>
-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
