<?php

function themeConfig($form)
{
    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', null, null, _t('LOGO'), _t(''));
    $form->addInput($logo);
    $sourl = new Typecho_Widget_Helper_Form_Element_Text('sourl', null, null, _t('搜索地址'), _t(''));
    $form->addInput($sourl);
    $favico = new Typecho_Widget_Helper_Form_Element_Text('favico', null, null, _t('favico'), _t(''));
    $form->addInput($favico);
    $pnfpic = new Typecho_Widget_Helper_Form_Element_Text('pnfpic', null, null, _t('404图片'), _t(''));
    $form->addInput($pnfpic);
    $dibus = new Typecho_Widget_Helper_Form_Element_Text('dibus', null, null, _t('网站版权'), _t(''));
    $form->addInput($dibus);
    $dibux = new Typecho_Widget_Helper_Form_Element_Text('dibux', null, null, _t('备案号'), _t(''));
    $form->addInput($dibux);
    $miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', null, null, _t('描述'), _t(''));
    $form->addInput($miaoshu);
    $guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', null, null, _t('关键词'), _t(''));
    $form->addInput($guanjianci);
    $haibaobq = new Typecho_Widget_Helper_Form_Element_Text('haibaobq', null, null, _t('海报版权'), _t(''));
    $form->addInput($haibaobq);
}
function themeFields($layout)
{
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', null, null, _t('文章头图'), _t(''));
    $layout->addItem($thumb);
    $guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', null, null, _t('关键词'), _t(''));
    $layout->addItem($guanjianci);
    $miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', null, null, _t('描述'), _t(''));
    $layout->addItem($miaoshu);
    $ico = new Typecho_Widget_Helper_Form_Element_Text('ico', null, null, _t('图标'), _t(''));
    $layout->addItem($ico);
}
function showThumbnail($widget, $type = 0)
{
    $random = Helper::options()->themeUrl . '/mr.jpeg';
    $img = $random;
    if (!empty($widget->fields->thumb)) {
        $img = $widget->fields->thumb;
    } 
    else {
        $attach = $widget->widget('Widget_Contents_Attachment_Related@' . $widget->cid . '-' . uniqid(), [
            'parentId' => $widget->cid,
            'limit'    => 1,
            'offset'   => 0
        ])->attachment;
        if ($attach && $attach->isImage) {
            $img = $attach->url;
        }
    }
    if ($type == 0) {
        echo $img === $random ? $img : $img . Helper::options()->thumbnail;
    } else {
        return $img === $random ? $img : $img . Helper::options()->thumbnail;
    }
}
function themeInit($archive)
{
    Helper::options()->commentsPageDisplay = 'first';
    Helper::options()->commentsOrder = 'DESC';
    Helper::options()->commentsMaxNestingLevels = 999;
}
function get_comment_at($coid)
{
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
                                 ->where('coid = ?', $coid));
    $parent = $prow['parent'];
    if (!empty($parent)) {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
                                     ->where('coid = ? AND status = ?', $parent, 'approved'));
        if (!empty($arow['author'])) {
            $author = $arow['author'];
            $href   = '<span class="reply">@<a href="#comment-' . $parent . '">' . $author . '</a></span>';
            return $href;
        } else {
            return '';
        }
    } else {
        return '';
    }
}