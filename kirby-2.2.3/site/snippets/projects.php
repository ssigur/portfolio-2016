<?php /*
<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
 */ ?>
<h2 class="hidden-L">projets</h2>

<section class="projects-list">
  <?php  $i=1; foreach(page('projects')->children()->visible() as $project): ?>
  <article class="project-item">
    <a class="scene_element scene_element--fade-in-down" href="<?php echo $project->url() ?>" style="animation-delay:<?php echo $i / 8  ?>s">
      <section class="legend">
        <h3 class="title"><?php echo $project->title()->html() ?></h3>
        <p><?php echo $project->text()->excerpt(26) ?></p>
      </section>


      <?php /* if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>

          <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >

      <?php endif */ ?>
    </a>
  </article>
  <?php $i++; endforeach ?>

  <?php // Old portfolio
  snippet('projects-old') ?>


  <ul class="projects-list-nav scene_element scene_element--fade-in-up">
    <li class="projects-prev"><span>prev</span></li>
    <li class="projects-next"><span>next</span></li>
  </ul>
</section>
