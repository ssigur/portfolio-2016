<?php snippet('header') ?>


    <main  class="contact" role="main"><?php
        // Convert the filename to a full file object
        $file = $page->background()->toFile();
        // Use the file object
        //echo $file->url();
        ?>
        <article class="scene_element scene_element--fade-in-down" <?php echo 'style="background-image: url('.$file->url().')"' ?>>

            <section >
                <h1><?php echo $page->title()->html() ?></h1>
                <h2 class="title"><?php echo $page->titleContent()->html() ?></h2>
                <div class="content">
                    <?php echo $page->text()->kirbytext() ?>
                </div>
            </section>

        </article>


    </main>

<?php snippet('footer') ?>