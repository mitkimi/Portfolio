<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="foot-aside-container">
    <div class="layui-container">
        <div class="aside-item">
            <section class="widget">
                <h3 class="widget-title"><?php $this->options->title() ?></h3>
                <ul class="widget-list">
                    <li>Theme is <span style="color:#fa709a">Thomit for mcsite</span></li>
                    <li>by mitkimi.com</li>
                    <li>&copy; mc.mitkimi.com</li>
                    <li>All Rights Reseved</li>
                </ul>
            </section>
        </div>
        <div class="aside-item">
            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
            <section class="widget">
                <h3 class="widget-title"><?php _e('RECENT POSTS'); ?></h3>
                <ul class="widget-list">
                    <?php $this->widget('Widget_Contents_Post_Recent')
                    ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </section>
            <?php endif; ?>
        </div>
        <div class="aside-item">
            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
            <section class="widget">
                <h3 class="widget-title"><?php _e('RECENT COMMENTS'); ?></h3>
                <ul class="widget-list">
                <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                <?php while($comments->next()): ?>
                    <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
                <?php endwhile; ?>
                </ul>
            </section>
            <?php endif; ?>
        </div>
    </div>
</div>
