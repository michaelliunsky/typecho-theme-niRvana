<div class="main-nav float">
    <div class="container" style="height: 100%;">
        <div class="row" style="height: 100%;">
            <div class="col-sm-12 col-md-3 logo"><a
                    href="<?php $this->options->siteUrl() ?>"><img
                        src="<?php $this->options->logo(); ?>"></a>
            </div>
            <div class="col-sm-12 col-md-8 col-xl-8_5 menu-wrap">
                <div class="menuLeft">
                </div>
                <div class="searchRight visible-xs visible-sm" style="margin-right: -8px;
    margin-top: -48px;">
                    <div class="normal_searchBtn"
                        style="<?php if ($this->is('page', 'so')): ?>background:#20a0ff;color:#fff;<?php endif ?>"
                        onclick="javascript:location.href='<?php $this->options->sourl(); ?>'">
                        <i class="icon font_family icon-search"></i></div>
                </div>
                <div pandatab="" class="topNav" style="width:100%"
                    active-class=".current-menu-item,.current-menu-ancestor" sub-class=".sub-menu">
                    <ul class="menu">
                        <li
                            class="menu-item <?php if ($this->is('index')): ?>current-menu-item<?php endif ?>">
                            <a
                                href="<?php $this->options->siteUrl(); ?>"><i
                                    class="icon font_family icon-home"></i> 首页</a></li>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages);
                    while ($pages->next()): ?>
                        <li class="menu-item <?php if ($this->is('page', $pages->slug)): ?>current-menu-item<?php endif; ?>"
                            style="display:inline-block!important">
                            <a href="<?php $pages->permalink(); ?>"
                                title="<?php $pages->title(); ?>">
                                <?php if ($pages->fields->ico):?>
                                <i
                                    class="<?php $pages->fields->ico(); ?>"></i>
                                <?php endif;?><?php $pages->title(); ?></a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-1 col-xl-0_5 hidden-xs hidden-sm">
                <div class="normal_searchBtn"
                    style="<?php if ($this->is('page', 'so')): ?>background:#20a0ff;color:#fff;<?php endif ?>"
                    onclick="javascript:location.href='<?php $this->options->sourl(); ?>'">
                    <i class="icon font_family icon-search"></i></div>
            </div>
            <div class="mobileNavMenuBtn visible-xs visible-sm">
                <div class="menuIcon" @click="this.toggle_mobile_menu()">
                    <div class="bread bread1"></div>
                    <div class="bread bread2"></div>
                    <div class="bread bread3"></div>
                </div>
            </div>
        </div>
    </div>