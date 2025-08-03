<div class="pageLoader flex-row-middle flex-center" style="opacity: 0.9;visibility: unset;" id="p1">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
<footer id="footer">
    <div class="container">
        <div class="copyright silver-color">
            <?php $this->options->dibus(); ?>
        </div>
        <div class="beian">
            <?php $this->options->dibux(); ?>
        </div>
        <div class="copyright silver-color">Theme <strong>niRvana</strong> By <a href="https://blog.mkliu.top/" target="_blank"><span>michaelliunsky</span></a></div>
    </div>
</footer>
</div>
<div class="floatTools">
    <div class="tool-button backToTop unavailable" @click="this.backToTop()" style="transform: rotate(-45deg)"><i class="icon font_family icon-rocket"></i></div>
</div>
</div>
<script src="https://jsd.onmicrosoft.cn/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('js.js'); ?>"></script>
</body>
<script>
window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        closeload();
    }
});
(function checkReferrer() {
    try {
        const currentDomain = window.location.hostname;
        let referrerDomain = '';
        if (document.referrer) {
            referrerDomain = new URL(document.referrer).hostname;
        }
        if (referrerDomain === currentDomain) {
            openload();
        }
    } catch (e) {
        console.log("Referrer check error:", e);
    }
})();
function openload() {
    const p1 = document.getElementById("p1");
    p1.className = "pageLoader flex-row-middle flex-center";
}
function closeload() {
    const p1 = document.getElementById("p1");
    p1.className = "pageLoader flex-row-middle flex-center noload";
}
window.onload = function() {
    setTimeout(closeload, 300);
};
</script>