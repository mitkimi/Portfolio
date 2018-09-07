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
	</el-breadcrumb>
	<el-alert
	title="设置了回调的 alert"
	type="warning"
	@close="handleClose">
	</el-alert>
	<el-card>
	shouye 
	</el-card>
</el-main>
<?php $this->need('footer.php'); ?>
