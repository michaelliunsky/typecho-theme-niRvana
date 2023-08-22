<!DOCTYPE html>
<html lang="zh-CN"><head><title><?php $this->options->title() ?> | <?php $this->options->description() ?></title><meta name="keywords" content="<?php $this->options->guanjianci(); ?>"/>
<meta name="description" content="<?php $this->options->miaoshu(); ?>"/>
<?php include('head.php'); ?>
</head><body class="black-color dark-slider"><div id="wrapper"><div class="row">
<?php include('sidebar.php'); ?>
</div></div><div id="main"><div class="container postListsModel"><div class="row"><div class="col-md-12 col-lg-12"><div class="categoryNav-wrapper" style="width: 100%;"><div pandatab="" class="categoryNav" active-class=".current-menu-item,.current-menu-ancestor" sub-class=".sub-menu"><ul id="menu-cattab" class="menu"><li class="anchor" style="position: absolute; left: 0px; width: 78px; opacity: 1;"></li>
<?php include('menu.php'); ?>
</ul></div></div>
<div class="col-xs-12"><div class="row"><div class="row postLists cards" height-to="sidebar">
<?php if ($this->have()): ?>
<div class="global_search_form fullscreen_search visible container" style="padding-top: 60px;"><div class="searchbox clearfix">
<form name="myform" onkeydown="if(event.keyCode==13){return false;}">
<input style="color:#8492a6" name="name" type="search" placeholder="请输入关键词"></form>
<span class="button" @click="so()"><span class="icon"><i class="icon font_family icon-search"></i></span></span></div></div>
<a href="search" id="overso" style="display:none"></a>
<script type="text/javascript">
function so(){
var name=document.myform.name.value;
var overhref = "../search/"+name;
document.getElementById("overso").setAttribute("href",overhref); 
document.getElementById("overso").click();
};
</script>
<?php while($this->next()): ?>
<div class="col-xxs-6 col-xs-4 col-lg-2_5 post-card-wrapper"><div class="card"><a href="<?php $this->permalink() ?>" class="cover" style="background-image: url(<?php $this->fields->toutu(); ?>);" showas="padding"></a><a href="<?php $this->permalink() ?>" showas="img"><img src="<?php $this->fields->toutu(); ?>" class="cover" alt=""></a><div class="meta"><h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2><div class="tags"><a class="color-<?php echo rand(1,8); ?>"><?php $this->category(' · ', false); ?></a>
</div><div class="summary"><span class="comments"><i class="icon font_family icon-clock"></i> <?php $this->date('n月j日 · Y年'); ?></span></div></div></div></div>
<?php endwhile; ?></div><?php include('pagenav.php'); ?>
<?php else: ?>
</div>
<p style="font-size:28px;margin: 0 auto;text-align: center;color:#8492a6;padding-top: 80px;">没有发现文章的踪迹</p>
<?php include('sousuo.php'); ?>
<?php endif; ?>
</div></div></div></div></div>
<?php include('footer.php'); ?>