<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>
    hljs.initHighlightingOnLoad();
</script>
<!--footer-->
<div class="footer">
	<p>&copy;  <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>, All Rights Reserved</p>
	<p>自豪的由typecho强力驱动</p>
</div>
<script src="<?php $this->options->themeUrl('./assets/layui/layui.all.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
