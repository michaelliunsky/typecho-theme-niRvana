<div class="pageLoader flex-row-middle flex-center" style="opacity: 0.9;visibility: unset;" id="p1"><div></div><div></div><div></div><div></div></div><footer id="footer"><div class="container"><div class="copyright silver-color"><?php $this->options->dibus(); ?></div><div class="beian"><?php $this->options->dibux(); ?></div><a href="https://blog.mkliu.top" id="banquan"><div class="copyright silver-color">Theme niRvana By michaelliunsky
</div></a></div></footer></div><div class="floatTools"><div class="tool-button backToTop unavailable" @click="this.backToTop()" style="transform: rotate(-45deg)"><i class="icon font_family icon-rocket"></i></div></div></div><script src="https://jsd.onmicrosoft.cn/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script><script src="<?php $this->options->themeUrl('js.js'); ?>"></script></body><script>$('body').on('click', 'a', function(){
    var href = $(this).attr('href');
    if(!href || /^(javascript:)|#/.test(href)) return;
    loading();
    setTimeout(window.location.href = href,300);
    return false;
 });
function openload(){
 var p1 = document.getElementById("p1");
 p1.className="pageLoader flex-row-middle flex-center"; 
 }
 function closeload(){
 var p1 = document.getElementById("p1");
 p1.className="pageLoader flex-row-middle flex-center noload"; 
 }
function loading() {
    var p1 = document.getElementById("p1");
 p1.className="pageLoader flex-row-middle flex-center"; 
}
window.onload = setTimeout(closeload,300);</script>