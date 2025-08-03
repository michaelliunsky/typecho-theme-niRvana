<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<title><?php if ($this->fields->biaoti) {
	    echo $this->fields->biaoti.' | ';
	} ?><?php $this->options->title() ?></title>
	<?php if ($this->fields->guanjianci): ?>
	<meta name="keywords"
		content="<?php $this->fields->guanjianci(); ?>" />
	<?php endif; ?>
	<?php if ($this->fields->miaoshu): ?>
	<meta name="description"
		content="<?php $this->fields->miaoshu(); ?>" />
	<?php endif; ?>
	<?php include('head.php'); ?>
</head>

<body class="black-color dark-slider">
	<div id="wrapper">
		<div class="row">
			<?php include('sidebar.php'); ?>
		</div>
	</div>
	<div id="main">
		<div class="container coverflow-wrapper">
			<div id="coverflow" class="unfull">
				<div class="showBox">
					<div class="current">
						<div class="page">
							<div class="container flex-row-middle coverflow">
								<div class="content flex-column-middle" style="width: 100%;">
									<h1><?php $this->title() ?></h1>
								</div>
								<div class="image flex-center">
									<div class="card"
										style="background-image: url(<?php showThumbnail($this); ?>);">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="imgColor"
					style="background:url(<?php showThumbnail($this); ?>) no-repeat;-webkit-filter: blur(50px);-moz-filter: blur(50px);-ms-filter: blur(50px);filter: blur(50px);transform: scale(1.2);background-size:cover;background-position: center;">
				</div>
			</div>
		</div>
		<div class="container postListsModel">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="col-xs-12">
						<div class="row postLists">
							<div class="article_wrapper post clearfix">
								<div class="meta"><span class="inline-block"><i
											class="icon font_family icon-clock"></i><?php $this->date('n月j日 · Y年'); ?></span><span
										class="inline-block"><i
											class="icon font_family icon-bookmark"></i><?php $this->category(' · ', false); ?></span>
								</div>
								<article class="clearfix">
									<?php
$pattern = '/<img\s+[^>]*src=["\'](.*?)["\'][^>]*>/i';
	$replacement = '<a href="$1">$0</a>';
	$content = preg_replace($pattern, $replacement, $this->content);
	echo $content;
	?>
								</article>
								<?php include('share.php'); ?>
							</div>
							<?php $this->options->xgwz(); ?>
							<?php include('comments.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div><?php include('footer.php'); ?>