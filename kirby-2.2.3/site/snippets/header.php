<!DOCTYPE html>
<html lang="en" class="no-js hide-navigation">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,900' rel='stylesheet' type='text/css'>

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