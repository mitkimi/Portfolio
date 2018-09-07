<?php
/**
 * 一个公开文档/作品集
 * UI库：layui
 * 
 * @package Portfolio
 * @author i@mitkimi.com
 * @version 1.3
 * @link https://github.com/mitkimi/Portfolio
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<?php $this->need('sidebar.php'); ?>
<el-main>
	<el-breadcrumb separator-class="el-icon-arrow-right" class="breadcrumb">
	<el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
	<el-breadcrumb-item>活动管理</el-breadcrumb-item>
	<el-breadcrumb-item>活动列表</el-breadcrumb-item>
	<el-breadcrumb-item>活动详情</el-breadcrumb-item>
	</el-breadcrumb>
	<el-alert
	title="设置了回调的 alert"
	type="warning"
	@close="handleClose">
	</el-alert>
	<el-card>
	<div class="layui-container theme-container">
		<div class="theme-flex-container">
			<?php while($this->next()): ?>
				<div class="layui-col-xs12 layui-col-sm12 layui-col-md6">
					<div class="card">
						<div class="title"><a href="<?php $this->permalink() ?>" target="_blank" ><?php $this->title() ?></a></div>
						<div class="sub-title">作者：<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> | 时间：<?php $this->date(); ?> | <?php $this->category(','); ?> | <span class="layui-badge-rim"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></span></div>
						<div class="detail">
							<?php $this->content(); ?>
						</div>
						<a href="<?php $this->permalink() ?>" class="link" target="_blank">阅读全文</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="" style="display: none;">
			<?php while($this->next()): ?>
				<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
					<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<ul class="post-meta">
						<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
						<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
						<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
						<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
					</ul>
					<div class="post-content" itemprop="articleBody">
						<?php $this->content(); ?>
					</div>
				</article>
			<?php endwhile; ?>

			<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
		</div>
	</div>
	</el-card>
</el-main>




<?php $this->need('footer.php'); ?>
