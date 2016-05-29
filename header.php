<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo( 'name' ); ?> &mdash; 피드" href="<?php echo esc_url( get_feed_link() ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
  <!--[if IE]><div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>지원하지 않는 브라우저입니다. 브라우저를 <a class="alert-link" href="http://www.whatbrowser.org/intl/ko">업그레이드</a>하세요.</div><![endif]-->
  <a class="sr-only sr-only-focusable" href="#content">본문으로 건너뛰기</a>
</div>

<header id="masthead" class="site-header" role="banner">
  <div class="container">
    <h1 class="site-title uppercase"><a id="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </div>
</header>

<div id="content" class="site-content">
