<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>

<el-main>
	<el-breadcrumb separator-class="el-icon-arrow-right" class="breadcrumb">
        <el-breadcrumb-item :to="{ path: '/' }"><?php $this->options->title() ?></el-breadcrumb-item>
        <el-breadcrumb-item><?php $this->title() ?></el-breadcrumb-item>
        
	</el-breadcrumb>
	<el-card>
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
	</el-card>
</el-main>


<?php $this->need('footer.php'); ?>
