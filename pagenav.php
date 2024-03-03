<div class="pagenav" style="">
    <div class="panda_pagi" pandatab="" active-class=".active" sub-class=".sub-menu">
        <ul class="menu">
            <li class="pagenumber page-numbers"><?php $this->pageLink('<i class="fas icon font_family icon-chevron-left"></i>'); ?></li>
            <li class="pagenumber active"><a class="page-numbers" style="width: 80px">
                    <?php if($this->_currentPage > 1) {
                        echo $this->_currentPage;
                    } else {
                        echo 1;
                    }?> / <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></a></li>
            <li class="pagenumber page-numbers"><?php $this->pageLink('<i class="fas icon font_family icon-chevron-right"></i>', 'next'); ?></li>
        </ul>
    </div>
</div>