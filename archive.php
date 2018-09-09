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
            <el-row :gutter="20">
                <?php while($this->next()): ?>
                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md6" style="display:none;">
                        <div class="card">
                            <div class="title"><a href="<?php $this->permalink() ?>" target="_blank" ><?php $this->title() ?></a></div>
                            <div class="sub-title">作者：<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> | 时间：<?php $this->date(); ?> | <?php $this->category(','); ?> | <span class="layui-badge-rim"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></span></div>
                            <div class="detail">
                                <?php $this->content(); ?>
                            </div>
                            <a href="<?php $this->permalink() ?>" class="link" target="_blank">阅读全文</a>
                        </div>
                    </div>
                    
                    <el-col :md="8" :lg="6" :xl="4">
                    <a href="<?php $this->permalink() ?>">
                        <el-card :body-style="{ padding: '0px' }" shadow="hover">
                            <div style="width:100%;height: 16vw;overflow:hidden;">
                                <img src="<?php echo get_postthumb($this); ?>" style="width:100%;display:block;">
                            </div>
                            <div style="padding: 14px;height: 30px;">
                                <span><?php $this->title() ?></span>
                            </div>
                        </el-card>
                    </a>
                    </el-col>
                    
                <?php endwhile; ?>
            </el-row>
        </div>
        <div class="page-navigator-container">
            <?php $this->pageNav('<', '>'); ?>
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
