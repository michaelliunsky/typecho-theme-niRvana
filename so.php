<?php
/**
 * 搜索模板
 *
 * @package custom
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title><?php $this->fields->biaoti(); ?> | <?php $this->options->title() ?></title>
    <meta name="keywords" content="<?php $this->fields->guanjianci(); ?>" />
    <meta name="description" content="<?php $this->fields->miaoshu(); ?>" />
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
                        <div pandatab="" class="categoryNav" active-class=".current-menu-item,.current-menu-ancestor" sub-class=".sub-menu">
                            <ul id="menu-cattab" class="menu">
                                <li class="anchor" style="position: absolute; left: 0px; width: 78px; opacity: 1;"></li>
                                <?php include('menu.php'); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="row postLists cards" height-to="sidebar">
                                <?php include('sousuo.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>