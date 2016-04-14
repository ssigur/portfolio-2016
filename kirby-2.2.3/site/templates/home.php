<?php snippet('header') ?>

  <main class="main home" role="main">
    <h1 class="hidden-L"><?php echo $page->title()->html() ?></h1>
    <div class="overlay">
      <img src="<?php echo url('assets/images/logo-ssigur.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>