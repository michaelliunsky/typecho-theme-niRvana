<!DOCTYPE html>
<html lang="zh_CN">
  <head>
    <link rel="icon" href="<?php $this->options->favico(); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Page Not Found | <?php $this->options->title() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta
      name="viewport"
      content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,viewport-fit=cover"
    />
    <meta name="renderer" content="webkit" />
  </head>
  <body>
    <div class="four04">
      <a href="<?php $this->options->siteUrl() ?>"
        ><img src="<?php $this->options->pnfpic(); ?>"
      /></a>
    </div>
    <style>
      html,
      body {
        background: #fff;
      }
      body {
        margin: 0;
      }
      .four04 {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .four04 img {
        max-width: 96vw;
        max-height: 96vh;
      }
    </style>
  </body>
</html>
