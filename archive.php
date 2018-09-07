<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>

<el-main>
    <el-breadcrumb separator-class="el-icon-arrow-right" class="breadcrumb">
        <el-breadcrumb-item :to="{ path: '/' }"><?php $this->options->title() ?></el-breadcrumb-item>
        <el-breadcrumb-item>
            <?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('搜索： "%s"'),
                'tag'       =>  _t('"%s" 标签下的文章'),
                'author'    =>  _t('"%s" 发布的文章')
            ), '', ''); ?>
        </el-breadcrumb-item>
        
    </el-breadcrumb>

    <el-card>
    <?php if ($this->have()): ?>
        
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
        <div class="page-navigator-container">
            <?php $this->pageNav('前一页', '后一页'); ?>
            <div class="clearfix"></div>
        </div>
    <?php else: ?>
        <div class="nothing-container">
            <div class="pic-container">
                <img src="<?php $this->options->themeUrl('./img/nothing.png'); ?>" style="height: 50%"/>
            </div>
            <p>没有内容</p>
        </div>
    <?php endif; ?>
    </el-card>
</el-main>


        

	
	<?php $this->need('footer.php'); ?>
