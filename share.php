<div class="share-modal" style="text-align: center;">
    <a class="toWeibo" target="_blank" href="https://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&appkey=<?php $this->options->title(); ?>&title=<?php if ($this->fields->biaoti) {
        $this->fields->biaoti();
    } else {
        $this->options->title();
    } ?>&pic=<?php showThumbnail($this); ?>"><i
            class="icon font_family icon-weibo" data-toggle="tooltip" data-placement="auto top"
            data-original-title="分享到微博"
            style="background:radial-gradient(circle farthest-corner at 75% 25%,#ff7a60 0,#e6162d 100%)"></i></a>
    <a class="toWeibo" target="_blank" href="https://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&title=<?php if ($this->fields->biaoti) {
        $this->fields->biaoti();
    } else {
        $this->options->title();
    } ?>&pics=<?php showThumbnail($this); ?>&summary=<?php if ($this->fields->miaoshu) {
        $this->fields->miaoshu();
    } else {
        $this->excerpt(140, '...');
    } ?>&desc=我正在『<?php $this->options->title() ?>』阅读《<?php if ($this->fields->biaoti) {
        $this->fields->biaoti();
    } else {
        $this->options->title();
    } ?>》，你也一起来看吧！"><i class="icon font_family icon-qq" data-toggle="tooltip"
            data-placement="auto top" data-original-title="分享到 QQ"
            style="background:radial-gradient(circle farthest-corner at 75% 25%,#20b8ff 0,#20a0ff 100%);box-shadow:0 10px 10px -2px hsla(206, 100%, 56%, 0.6)"></i></a><a
        class="toWeibo" target="_blank" href="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php if ($this->fields->biaoti) {
            $this->fields->biaoti();
        } else {
            $this->options->title();
        } ?>&site=<?php $this->options->title(); ?>&pics=<?php showThumbnail($this); ?>&summary=<?php if ($this->fields->miaoshu) {
            $this->fields->miaoshu();
        } else {
            $this->excerpt(140, '...');
        } ?>&desc=我正在『<?php $this->options->title() ?>』阅读《<?php if ($this->fields->biaoti) {
            $this->fields->biaoti();
        } else {
            $this->options->title();
        } ?>》，你也一起来看吧！"><i class="icon font_family icon-star" data-toggle="tooltip"
            data-placement="auto top" data-original-title="分享到空间"
            style="background: radial-gradient(circle farthest-corner at 75% 25%,#ffce00 0,#ff9900 100%);box-shadow: 0 10px 10px -2px rgba(255, 153, 0, 0.6)"></i></a>
    <a class="toWeibo" href="javascript: void(0);" onclick="qrcode();"><i class="icon font_family icon-qrcode"
            data-toggle="tooltip" data-placement="auto top" data-original-title="文章海报"
            style="background:radial-gradient(circle farthest-corner at 75% 25%,#9bd330 0,#67C23A 100%);box-shadow: 0 10px 10px -2px rgba(103,194,58,.6)"></i></a>
</div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uuid-timestamp-1582358403386"
    style="display: none;" id="openbox"></button>
<div class="modal fade" id="uuid-timestamp-1582358403386" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    style="display: none">
    <div class="wechat-cover modal-dialog" role="document"
        style="transform:scale(0.8);margin-top: -40px;margin-bottom: -60px">
        <div class="modal-content">
            <div class="modal-header"
                style="background: url(<?php showThumbnail($this); ?>) no-repeat;background-size: cover;height:400px;text-align: center;background-position: center;">
                <h3
                    style="padding-left: 15px;padding-right: 15px;margin-top:350px;color: #fff;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.5));line-height: unset!important;margin-left: -15px;margin-right: -15px;">
                    <?php $this->title() ?></h3>
                <p>
                </p>
            </div>
            <div class="modal-body" style="text-align:center"><img
                    src="https://api.qrserver.com/v1/create-qr-code/?size=90x90&color=8492a6&margin=0&data=<?php $this->permalink() ?>"
                    style="margin:0 0 12px 0">
                <p style="color: #8492a6">
                    扫描二维码阅读详细内容</br><?php $this->options->haibaobq(); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="wechat-cover" style="margin-top:0px!important">
        <div class="wait"><span class="info">海报已生成可截图分享至社交平台</span></div>
    </div>
</div>
<script>
    function qrcode() {
        document.getElementById('openbox').click();
    }
</script>