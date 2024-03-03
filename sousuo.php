<div class="global_search_form fullscreen_search visible container" style="padding-top: 60px;">
    <div class="searchbox clearfix">
        <form name="myform" onkeydown="if(event.keyCode==13){return false;}">
            <input style="color:#8492a6" name="name" type="search" placeholder="请输入关键词">
        </form>
        <span class="button" @click="so()"><span class="icon"><i class="icon font_family icon-search"></i></span></span>
    </div>
</div>
<div class="container custom-scrollbar-content" style="margin: auto;padding-bottom: 80px">
    <aside data-id="sidebar-1" class="sidebar" style="display: block;">
        <ul class="widget-list">
            <li id="pf_tag_cloud-widget-3" class="widget pf_tag_cloud">
                <h2 class="widgettitle">猜你喜欢</h2>
                <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
                <?php if($tags->have()): ?>
                <ul class="tag">
                    <?php while ($tags->next()): ?>
                    <li><a href="<?php $tags->permalink(); ?>" target="_self"><?php $tags->name(); ?></a></li>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <li style="color: #738192"><?php _e('站长没有提供任何关键词'); ?></li>
                    <?php endif; ?>
                </ul>
    </aside>
</div>
<a href="search" id="overso" style="display:none"></a>
<script type="text/javascript">
    function so() {
        var name = document.myform.name.value;
        var overhref = "../search/" + name;
        document.getElementById("overso").setAttribute("href", overhref);
        document.getElementById("overso").click();
    };
</script>