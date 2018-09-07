<?php
/**
 * 一个用来作为开发团队工作沟通整合用的网站主题
 * UI库：layui
 * 插件：layui.js swiper.js highlight.js(cdn)
 * 未完成内容：评论区的显示和体验、阴影部分的体验、大量文章显示懒加载、首页轮播图后台设置、工具栏的整合、快速入口后台设定
 * 命名：Thomas & mitkimi 首三字母
 * 
 * @package Thomit for mc
 * @author i@mitkimi.com
 * @version 1.2
 * @link https://github.com/mitkimi/devsite_theme
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<!-- Swiper -->
<div class="swiper-container">
	<div class="swiper-wrapper">
	  <div class="swiper-slide">
	  	<img src="http://www.58game.com/resource/uploads/content/20170630/5955c758d79c3.jpg" />
	  </div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
	<!-- Add Arrows -->
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>
<script src="<?php $this->options->themeUrl('./assets/swiper/js/swiper.min.js'); ?>"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
</script>

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


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
