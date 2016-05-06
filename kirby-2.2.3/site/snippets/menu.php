<?php /* BTN Menu */ ?>
<button id="trigger-nav">
  <span class="label">Menu</span>
  <div class="trigger-circle"></div>
  <div class="trigger-container">
    <div class="trigger-bar trigger-bar-first"></div>
    <div class="trigger-bar trigger-bar-second"></div>
    <div class="trigger-bar trigger-bar-third"></div>
  </div>
</button>

<?php /* NAV Panel */ ?>
<nav role="navigation">
  <ul class="menu fullscreen cf">
    <?php foreach($pages->visible() as $p): ?>
      <li>
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
