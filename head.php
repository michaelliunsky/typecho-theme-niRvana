<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport"
  content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,viewport-fit=cover" />
<meta name="renderer" content="webkit" />
<link rel="icon" href="<?php $this->options->favico(); ?>" />
<script type="text/javascript">
  var pandastudio_framework = {
    current_user: {
      logged_in: false,
      name: false,
      email: false,
      id: 0
    },
  };
</script>
<style>
  @font-face {
    font-family: Play;
    src: url(<?php $this->options->themeUrl('Play-regular.ttf');
?>) format("truetype");
    font-style: normal;
    font-weight: 400;
  }

  @font-face {
    font-family: Play;
    src: url(<?php $this->options->themeUrl('Play-bold.ttf');
?>) format("truetype");
    font-style: normal;
    font-weight: 700;
  }
</style>
<script>
  let prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  if (prefersDarkMode) {
    document.write(
      '<link href="<?php $this->options->themeUrl('dark.css.css'); ?>" rel="stylesheet" type="text/css"/>'
      )
  } else {
    document.write(
      '<link href="<?php $this->options->themeUrl('css.css'); ?>" rel="stylesheet" type="text/css"/>'
      )
  };
</script>
<?php $this->header(); ?>