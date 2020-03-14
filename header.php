<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(''); ?></title>

  <!-- Assets preload -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//google-analytics.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/apple-touch-icon.png'; ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/favicon-32x32.png'; ?>">
  <link rel="icon" type="image/png" sizes="194x194" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/favicon-194x194.png'; ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/android-chrome-192x192.png'; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/favicon-16x16.pn'; ?>g">
  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/site.webmanifest'; ?>">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/public/assets/img/favicon/safari-pinned-tab.svg'; ?>" color="#000000">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#000000">

  <?php wp_head(); ?>
</head>
<body>
<div data-id="app">
  <loader-splashscreen></loader-splashscreen>