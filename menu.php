<li
  class="menu-item <?php if ($this->is('index')): ?>current-menu-item active<?php endif ?>">
  <a href="<?php $this->options->siteUrl(); ?>"><i
      class="icon font_family icon-lightbulb"></i> 全部文章</a>
</li>
<?php $this->widget('Widget_Metas_Category_List')->to($category);
  while ($category->next()): ?>
<li
  class="menu-item <?php if ($this->is('category', $category->slug)): ?>current-menu-item active<?php endif; ?>">
  <a href="<?php $category->permalink(); ?>"><i
      class="<?php echo $category->description(); ?>"></i>
    <?php $category->name(); ?></a>
</li>
<?php endwhile; ?>