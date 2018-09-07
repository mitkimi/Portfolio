<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>
    hljs.initHighlightingOnLoad();
</script>
</el-container>
<!--footer-->
<footer>
<p>
	&copy;
	<a href="https://www.mitkimi.com" target="_blank">黑米说</a> /
	<a href="https://dev.ipietech.net" target="_blank">好甜开发事务所</a> /
	<a href="https://www.ipietech.com" target="_blank">ipietech.com</a>
</p>
<p>
	Theme is <a href="https://github.com/mitkimi/Portfolio" target="_blank">Portfolio</a> by <a href="https://www.mitkimi.com" target="_blank">mitkimi</a>, Powered by <a href="http://typecho.org/" target="_blank">Typecho</a> 
</p>
<p>京ICP备15063748号</p>
</footer>
</div>
<script src="<?php $this->options->themeUrl('./script.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
