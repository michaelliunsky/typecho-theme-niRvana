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
    $xgwz = new Typecho_Widget_Helper_Form_Element_Text('xgwz', null, null, _t('相关文章'), _t(''));
    $form->addInput($xgwz);
}
function themeFields($layout)
{
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', null, null, _t('文章头图'), _t(''));
    $layout->addItem($thumb);
    $guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', null, null, _t('关键词'), _t(''));
    $layout->addItem($guanjianci);
    $miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', null, null, _t('描述'), _t(''));
    $layout->addItem($miaoshu);
    $biaoti = new Typecho_Widget_Helper_Form_Element_Text('biaoti', null, null, _t('标题'), _t(''));
    $layout->addItem($biaoti);
    $ico = new Typecho_Widget_Helper_Form_Element_Text('ico', null, null, _t('图标'), _t(''));
    $layout->addItem($ico);
    $pic = new Typecho_Widget_Helper_Form_Element_Text('pic', null, null, _t('长头图'), _t(''));
    $layout->addItem($pic);
}
function spacing($text)
{
    $text = preg_replace('~((?![年月日号])\p{Han})([a-zA-Z0-9+$@#\[\(\/‘“])~u', '\1 \2', $text);
    $text = preg_replace('~([a-zA-Z0-9+$’”\]\)@#!\/]|[\d [年月日]]{2,})((?![年月日号])\p{Han})~u', '\1 \2', $text);
    $text = preg_replace('~([a-zA-Z0-9]+)([\[\(‘“])~u', '\1 \2', $text);
    $text = preg_replace('~([\)\]’”])([a-zA-Z0-9]+)~u', '\1 \2', $text);
    return $text;
}

function showThumbnail($widget, $type = 0)
{
    $random = Helper::options()->themeUrl.'/mr.jpeg';
    $pattern = '/\<img.*?\ssrc\=\"(.*?)\"[^>]*>/i';
    $attach = $widget->widget('Widget_Contents_Attachment_Related@' . $widget->cid . '-' . uniqid(), array(
            'parentId'  => $widget->cid,'limit'     => 1,'offset'    => 0))->attachment;
    $t = preg_match_all($pattern, $widget->markdown($widget->text), $thumbUrl);
    $img = $random;


    $name = md5($widget->cid);
    $file1 = ".".__TYPECHO_PLUGIN_DIR__."/Thumb/uploads/".$name.'.webp';
    $file2 = ".".__TYPECHO_PLUGIN_DIR__."/Thumb/uploads/".$name.'.jpg';
    if(file_exists($file1)) {
        $img = Helper::options()->rootUrl.__TYPECHO_PLUGIN_DIR__."/Thumb/uploads/".$name.'.webp?'.filemtime($file1);
    } elseif(file_exists($file2)) {
        $img = Helper::options()->rootUrl.__TYPECHO_PLUGIN_DIR__."/Thumb/uploads/".$name.'.jpg?'.filemtime($file2);
    } elseif($widget->fields->thumb) {
        $img = $widget->fields->thumb;
    } elseif($widget->fields->img) {
        $img = $widget->fields->img;
    } elseif ($t && strpos($thumbUrl[1][0], 'icon.png') == false && strpos($thumbUrl[1][0], 'alipay') == false && strpos($thumbUrl[1][0], 'wechat') == false) {
        $img = $thumbUrl[1][0];
    } elseif (@$attach->isImage) {
        $img = $attach->url;
    }

    if($type == 0) {
        if($img == $random) {
            echo $img;
        } else {
            echo $img.Helper::options()->thumbnail;
        }
    } else {
        if($img == $random) {
            return $img;
        } else {
            return $img.Helper::options()->thumbnail;
        }
    }

}
