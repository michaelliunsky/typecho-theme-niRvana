<?php
/**
 * 作品展示模板，适用于设计稿、摄影、图片新闻等以图片为中心的展示.
 * @package niRvana
 * @author michaelliunsky
 * @version 2.0
 * @link https://blog.mkliu.top
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title><?php $this->options->title() ?> |
        <?php $this->options->description() ?></title>
    <meta name="keywords"
        content="<?php $this->options->guanjianci(); ?>" />
    <meta name="description"
        content="<?php $this->options->miaoshu(); ?>" />
    <?php include('head.php'); ?>
</head>

<body class="black-color dark-slider">
    <div id="wrapper">
        <div class="row">
            <?php include('sidebar.php'); ?>
        </div>
    </div>
    <div id="main">
        <div class="container postListsModel">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="categoryNav-wrapper" style="width: 100%;">
                        <div pandatab="" class="categoryNav" active-class=".current-menu-item,.current-menu-ancestor"
                            sub-class=".sub-menu">
                            <ul id="menu-cattab" class="menu">
                                <li class="anchor" style="position: absolute; left: 0px; width: 78px; opacity: 1;"></li>
                                <?php include('menu.php'); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="row postLists cards" height-to="sidebar">
                                <?php while ($this->next()): ?>
                                <div class="col-xxs-6 col-xs-4 col-lg-2_5 post-card-wrapper">
                                    <div class="card"><a
                                            href="<?php $this->permalink() ?>"
                                            class="cover"
                                            style="background-image: url(<?php showThumbnail($this); ?>);"
                                            showas="padding"></a><a
                                            href="<?php $this->permalink() ?>"
                                            showas="img"><img
                                                src="<?php showThumbnail($this); ?>"
                                                class="cover" alt=""></a>
                                        <div class="meta">
                                            <h2><a
                                                    href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                                            </h2>
                                            <div class="tags"><a
                                                    class="color-<?php echo rand(1, 8); ?>"><?php $this->category(' · ', false); ?></a>
                                            </div>
                                            <div class="summary"><span class="comments"><i
                                                        class="icon font_family icon-clock"></i>
                                                    <?php $this->date('n月j日 · Y年'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php include('pagenav.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>