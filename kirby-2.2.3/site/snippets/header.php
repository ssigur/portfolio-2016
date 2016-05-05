<!DOCTYPE html>
<html lang="en" class="no-js hide-navigation">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php if($page->metaDescription() != ''): ?>
  <meta name="description" content="<?php echo html($page->metaDescription()) ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <?php endif ?>

  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,500,900' rel='stylesheet' type='text/css'>


  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo url('assets/images/favicon/apple-icon-57x57.png') ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo url('assets/images/favicon/apple-icon-60x60.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/images/favicon/apple-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('assets/images/favicon/apple-icon-76x76.png') ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/images/favicon/apple-icon-114x114.png') ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url('assets/images/favicon/apple-icon-120x120.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo url('assets/images/favicon/apple-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url('assets/images/favicon/apple-icon-152x152.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url('assets/images/favicon/apple-icon-180x180.png') ?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo url('assets/images/favicon/android-icon-192x192.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url('assets/images/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo url('assets/images/favicon/favicon-96x96.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo url('assets/images/favicon/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?php echo url('assets/images/favicon/manifest.json') ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo url('assets/images/favicon/ms-icon-144x144.png') ?>">
  <meta name="theme-color" content="#ffffff">

  <link rel="alternate" type="application/rss+xml" href="<?php echo url('projets/feed') ?>" title="<?php echo html($pages->find('projets/feed')->title()) ?>" />

  <?php echo js(array(
      'assets/js/libraries.js',
  )) ?>
  <?php echo css('assets/css/styles.min.css') ?>

</head>
<body>

  <div id="main" class="m-scene">

    <header class="header cf" role="banner">
      <a class="logo" href="<?php echo url() ?>">
        <span class="hidden-L">Stéphane SIGUR</span>
        <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>

      <?php /* BTN Menu */ ?>
      <button id="trigger-nav">
        <div class="trigger-circle"></div>
        <div class="trigger-container">
          <div class="trigger-bar trigger-bar-first"></div>
          <div class="trigger-bar trigger-bar-second"></div>
          <div class="trigger-bar trigger-bar-third"></div>
        </div>
      </button>

      <?php snippet('menu') ?>

    </header>