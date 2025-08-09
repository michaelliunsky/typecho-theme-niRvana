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
			<div id="coverflow" class="unfull coverr">
				<div class="showBox">
					<div class="current">
						<div class="page">
							<div class="container flex-row-middle coverflow">
								<div class="content flex-column-middle" style="width: 100%;">
									<h1><?php if ($this->fields->biaoti) {
									    $this->fields->biaoti();
									} else {
									    $this->options->title();
									} ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="imgColor" style="background:url(<?php if ($this->fields->pic) {
				    $this->fields->pic();
				} else {
				    showThumbnail($this);
				}
	?>) no-repeat;background-size:cover;background-position: center"></div>
			</div>
		</div>
		<div class="container postListsModel">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="col-xs-12">
						<div class="row postLists">
							<div class="article_wrapper post clearfix">
								<article class="clearfix">
									<?php
$pattern = '/<img\s+[^>]*src=["\'](.*?)["\'][^>]*>/i';
	$replacement = '<a href="$1">$0</a>';
	$content = preg_replace($pattern, $replacement, $this->content);
	echo $content;
	?>
								</article>
							</div>
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