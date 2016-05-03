<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

      <?php if($page->isErrorPage()):
        // redirection temporisé vers page d'accueil
        ?>
        <script type="text/javascript">
          <!--
          var obj = 'window.location.replace("<?php echo $page->parent()->url() ?>");';
          setTimeout(obj,4000);
          // -->
        </script>
      <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>