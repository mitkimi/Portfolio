<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<el-aside style="background: rgb(84, 92, 100); width: 300px;">
    <el-menu
    default-active="2"
    class="el-menu-vertical-demo"
    @open="handleOpen"
    @close="handleClose"
    background-color="#545c64"
    text-color="#fff"
    active-text-color="#409eff">
    <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
    <?php while($categorys->next()): ?>
        <?php if ($categorys->levels === 0): ?>
            <?php $children = $categorys->getAllChildren($categorys->mid); ?>
            <?php if (empty($children)) { ?>
                <el-menu-item index="<?php $categorys->mid(); ?>" onclick="location.href='<?php $categorys->permalink(); ?>'">
                    <span slot="title"><?php $categorys->name(); ?></span>
                </el-menu-item>
            <?php } else { ?>
                <el-submenu index="1">
                    <template slot="title">
                        <span><?php $categorys->name(); ?></span>
                    </template>
                    <el-menu-item-group>
                        <?php foreach ($children as $mid) { ?>
                            <?php $child = $categorys->getCategory($mid); ?>
                            <a href="<?php echo $child['permalink'] ?>">
                                <el-menu-item index="1-1"><?php echo $child['name']; ?></el-menu-item>
                            </a>
                        <?php } ?>
                    </el-menu-item-group>
                </el-submenu>
            <?php } ?>
        <?php endif; ?>
    <?php endwhile; ?>
</el-aside>