<?php snippet('header') ?>


    <main  class="projects-item" role="main">
        <article class="scene_element scene_element--fade-in">
            <?php
            // Convert the filename to a full file object
            $file = $page->headerBackground()->toFile();
            // Use the file object
            //echo $file->url();
            ?>
            <header <?php echo 'style="background-image: url('.$file->url().')"' ?> >
                <h1 class="title"><?php echo $page->title()->html() ?></h1>
                <div class="chapo">
                    <?php echo $page->desc()->kirbytext() ?>
                </div>
                  <ul class="tags">
                    <?php foreach($page->tags()->split(',') as $tag): ?>
                        <li><?php echo $tag ?></li>
                    <?php endforeach ?>
                  </ul>
            </header>

          <div class="content">

              <?php if(!$page->text()->empty()): ?>
                  <?php echo $page->text()->kirbytext(); ?>
              <?php else: ?>
                  <?php
                  // Transform the comma-separated list of filenames into a file collection
                  $filenames = $page->visuels()->split(',');
                  if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
                  $files = call_user_func_array(array($page->files(), 'find'), $filenames);

                  // Use the file collection
                  /*foreach($files as $file)
                  {
                  echo $file->url();
                  }*/
                  ?>

                  <?php foreach($files as $image): ?>
                        <figure>
                            <?php /*<img src="<?php echo $image->url() ?>" alt="<?php echo $image->desc() ?>"> */?>
                            <img src="<?php echo $image->url() ?>"
                                 alt="<?php echo $image->desc() ?>" class="fill" sizes="100vw"
                                 srcset="<?php echo thumb($image, array('width' => 479, 'quality' => 94, 'crop' => false), false) ?> 479w,
                                        <?php echo thumb($image, array( 'width' => 599, 'quality' => 94, 'crop' => false), false) ?> 599w,
                                        <?php echo thumb($image, array( 'width' => 770, 'quality' => 94, 'crop' => false), false) ?> 770w,
                                        <?php echo thumb($image, array( 'width' => 900, 'quality' => 94, 'crop' => false), false) ?> 980w,
                                        <?php echo thumb($image, array( 'width' => 900,'quality' => 94, 'crop' => false), false) ?> 1024w" >
                            <figcaption><?php echo $image->desc() ?></figcaption>
                        </figure>


                  <?php endforeach ?>
              <?php endif ?>

          </div>
        </article>

        <?php /* Nav projets */ ?>
        <nav class="nextprev cf scene_element scene_element--fade-in" role="navigation">
          <?php if($prev = $page->prevVisible()): ?>
              <?php $file = $prev->headerBackground()->toFile(); ?>
              <a class="prev" href="<?php echo $prev->url() ?>" <?php echo 'style="background-image: url('.$file->url().')"' ?> >
                  <section class="legend"><span><?php /* &larr; */ ?> <?php echo $prev->title() ?></span><em>voir le projet</em></section>
              </a>
          <?php endif ?>
          <?php if($next = $page->nextVisible()): ?>
              <?php $file = $next->headerBackground()->toFile(); ?>
              <a class="next" href="<?php echo $next->url() ?>" <?php echo 'style="background-image: url('.$file->url().')"' ?> >
                  <section class="legend"><span><?php echo $next->title() ?><?php /* &rarr; */ ?> </span><em>voir le projet</em></section>
              </a>
              <?php else: ?>

              <?php if($site->find('projets/old')): // Old portfolio ?>
                <a class="old" href="<?php  echo $site->oldurl()->text() ?>" target="_blank">
                      <section><?php echo page('projets/old')->Desc()->kirbytext(); ?></section>
                </a>
              <?php endif ?>
          <?php endif ?>
        </nav>

    </main>

<?php snippet('footer') ?>