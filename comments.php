<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
define('__TYPECHO_GRAVATAR_PREFIX__', 'https://cravatar.cn/avatar/');

$sandbox_comment_alt = 1;
?>

<?php function threadedComments($comments, $options)
{
    global $sandbox_comment_alt;
    $commentClass = '';

    // 添加作者身份类
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' bypostauthor';
        } else {
            $commentClass .= ' byuser';
        }
    }

    // 添加评论交替类
    $commentClass .= ($sandbox_comment_alt % 2) ? ' alt' : '';
    $sandbox_comment_alt++;

    // 添加日期类 (简化的实现)
    $commentDate = $comments->date->format('U');
    $currentYear = date('Y');
    $commentYear = date('Y', $commentDate);
    if ($commentYear == $currentYear) {
        $commentClass .= ' c-' . date('n', $commentDate);
    }

    // 添加深度类
    $depthClass = '';
    if ($comments->levels > 0) {
        $depthClass = ' depth-' . ($comments->levels + 1);
    }
    ?>
<li itemscope itemtype="http://schema.org/UserComments"
	id="<?php $comments->theId(); ?>" class="comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass . $depthClass;
    ?>">
	<div id="div-comment-<?php $comments->coid(); ?>"
		class="comment-body clearfix">
		<?php if ($options->avatarSize): ?>
		<?php $comments->gravatar($options->avatarSize); ?>
		<?php endif; ?>
		<div class="comment-author vcard">
			<div class="meta">
				<span class="name" itemprop="name">
					<?php if ($comments->url): ?>
					<a href="<?php echo $comments->url; ?>"
						target="_blank" rel="external nofollow"
						itemprop="url"><?php echo $comments->author; ?></a>
					<?php else: ?>
					<?php echo $comments->author; ?>
					<?php endif; ?>
				</span>
				<span class="date">
					<?php $comments->date('Y-n-j'); ?>
					·
					<?php $comments->date('G:i'); ?>
				</span>
			</div>

			<?php if ('waiting' == $comments->status): ?>
			<em class="comment-awaiting-moderation">评论正在等待管理员审核...</em>
			<?php endif; ?>

			<div class="comment-text" itemprop="commentText">
				<?php
                $content = $comments->content;
    $atLink = get_comment_at($comments->coid);
    if ($atLink) {
        echo $atLink;
    }
    echo $content;
    ?>
			</div>

			<div class="reply">
				<div title="<?php echo $options->replyTooltip; ?>"
					data-toggle="tooltip" class="comment-reply-link-wrap">
					<a href="javascript:;" class="comment-reply-link"
						onclick="return TypechoComment.reply('comment-<?php $comments->coid(); ?>', <?php $comments->coid(); ?>);">
					</a>
				</div>
			</div>
		</div>
	</div>

	<?php if ($comments->children): ?>
	<ul class="children">
		<?php $comments->threadedComments($options); ?>
	</ul>
	<?php endif; ?>
</li>
<?php
}
?>

<div id="comments" data-no-instant>
	<?php $this->comments()->to($comments); ?>
	<div class="post-model"><i
			class="icon font_family icon-comment-alt"></i><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t(' %d 条评论')); ?>
	</div>

	<?php if ($this->allow('comment')): ?>
	<div id="<?php $this->respondId(); ?>"
		class="comment-respond clearfix">
		<div class="cancel-comment-reply">
		</div>

		<form method="post" action="<?php $this->commentUrl() ?>"
			id="comment-form" class="comment-form clear-float" role="form">

			<div class="comment-form-comment">
				<textarea rows="5" name="text" id="textarea" placeholder="请输入..." class="comment-input textarea"
					required><?php $this->remember('text'); ?></textarea>
			</div>

			<div class="form-meta">
				<?php if ($this->user->hasLogin()): ?>
				<p class="comment-user-info">
					<?php _e('身份: '); ?><a
						href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
					<a href="<?php $this->options->logoutUrl(); ?>"
						title="Logout"><?php _e('退出'); ?>
						&raquo;</a>
				</p>
				<?php else: ?>
				<p>
					<label for="author" class="required"></label>
					<input type="text" name="author" id="author" placeholder="昵称" class="comment-input text"
						value="<?php $this->remember('author'); ?>"
						required />
				</p>
				<p>
					<label for="mail"
						<?php if ($this->options->commentsRequireMail): ?>
						class="required"<?php endif; ?>></label>
					<input type="email" name="mail" id="mail" placeholder="邮箱" class="comment-input text"
						value="<?php $this->remember('mail'); ?>"
						<?php if ($this->options->commentsRequireMail): ?>
					required<?php endif; ?> />
				</p>
				<p>
					<label for="url"
						<?php if ($this->options->commentsRequireURL): ?>
						class="required"<?php endif; ?>></label>
					<input type="url" name="url" id="url" placeholder="网站" class="comment-input text"
						value="<?php $this->remember('url'); ?>"
						<?php if ($this->options->commentsRequireURL): ?>
					required<?php endif; ?> />
				</p>
				<?php endif; ?>
			</div>

			<p class="form-submit">
				<a id="cancel-comment-reply-link" href="javascript:;" style="display:none" data-no-instant
					onclick="return TypechoComment.cancelReply();"><i class="icon font_family icon-times"></i> 取消回复</a>
				<button type="submit" class="submit submit-comment"><i
						class="icon font_family icon-paper-plane"></i><?php _e('提交评论'); ?></button>
			<div class="comment-clear"></div>
			</p>
		</form>
	</div>
	<?php else: ?>
	<h3><?php _e('评论已关闭'); ?></h3>
	<?php endif; ?>

	<?php if ($comments->have()): ?>
	<div id="comments-list" class="comments">
		<?php $comments->listComments(array(
            'avatarSize' => 50,
            'replyTooltip' => '回复评论'
        )); ?>
	</div>
	<div class="comment-pagegroup">
		<?php
$npattern = '/\<li.*?class=\"next\"><a.*?\shref\=\"(.*?)\"[^>]*>/i';
	    $ppattern = '/\<li.*?class=\"prev\"><a.*?\shref\=\"(.*?)\"[^>]*>/i';
	    ob_start();
	    $comments->pageNav();
	    $con = ob_get_clean();
	    $n = preg_match_all($npattern, $con, $nextlink);
	    $p = preg_match_all($ppattern, $con, $prevlink);
	    if ($n) {
	        $nextlink = $nextlink[1][0];
	    } else {
	        $nextlink = false;
	    }

if ($p) {
    $prevlink = $prevlink[1][0];
} else {
    $prevlink = false;
}
?>
		<div id="commentnavi">
			<?php if ($prevlink): ?>
			<a href="<?php echo $prevlink; ?>"
				class="prev page-numbers">&laquo; 上一页</a>
			<?php endif; ?>

			<?php if ($nextlink): ?>
			<a href="<?php echo $nextlink; ?>"
				class="next page-numbers">下一页 &raquo;</a>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
</div>