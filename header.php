<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name');?></title>
  <meta name="description" content="<?php bloginfo('description');?>">
  <meta name="keywords" content="IT,プログラミング,コミュニティ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="プログラミング教材「WithCode」">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://withcode-plus.tech">
  <meta property="og:image" content="<?php echo get_template_directory_uri()?>/img/logo.png">
  <meta property="og:description" content="「人生をコードと共に」というビジョンを達成するべく、皆さんのプログラミング学習をサポートします。">
  <meta property="og:site_name" content="プログラミング教材">
  <!-- <link rel="icon" href="favicon.ico"> -->
  <link rel="apple-touch-icon" sizes="180×180" href="<?php echo get_template_directory_uri()?>/img/logo.png">
  <!-- google fonts(ゴシック体)の読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- google fonts(Barlow Condensed)の読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Slickファイルの読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <!-- cssの読み込み -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/common1.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/common2.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/service.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/about.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/news.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/single.css">
</head>
<body>
  <div id="splash">
    <div id="splash-logo"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="ロゴ画像"></div>
  </div>
  <div class="splashbg"></div>
  <div id="container">
    <!-- ヘッダー -->
    <header id="header">
      <div class="header-wrapper">
        <a href="<?php echo home_url();?>" class="header-logo">
          <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="ロゴ画像">
        </a>
        <nav>
          <!-- <ul>
            <li><a href="">TOP</a></li>
            <li><a href="html/service.html">SERVICE</a></li>
            <li><a href="html/about.html">ABOUT</a></li>
            <li><a href="html/news.html">NEWS</a></li>
            <li><a href="html/contact.html">CONTACT</a></li>
          </ul>  -->
          <?php
            $args=array(
              'menu' => 'menu',
              'menu_class' => '',
              'container' => false,
            );
            wp_nav_menu($args);
          ?>
        </nav>
      </div>
    <div class="drawer"></div>
    </header>
 