<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <!--[if lt IE 9]>
  <script>
  if (document.all && !window.opera){
    var head = document.getElementsByTagName('head')[0],
    style = document.createElement('style');
    style.type = 'text/css';
    style.styleSheet.cssText = ':before,:after{content:none !important';
    head.appendChild(style);
    setTimeout(function(){
        head.removeChild(style);
    }, 0);
  }
  </script>
  <![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet">

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/respond.min.js"></script>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
