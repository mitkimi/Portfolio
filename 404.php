<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
<el-main>
    <el-card>
        <div class="nothing-container">
            <div class="pic-container">
                <img src="<?php $this->options->themeUrl('./img/nothing.png'); ?>" style="width:50%;height: 50%"/>
            </div>
            <p>没有此页面</p>
        </div>
    </el-card>
</el-main>
<script>
localStorage.navIndex = 0;
</script>
	<?php $this->need('footer.php'); ?>
