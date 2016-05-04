<footer class="footer cf scene_element scene_element--fade-in-up" role="contentinfo">

    <div class="colophon">
        <?php echo page('footer')->text()->kirbytext() ?>
        <?php // <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a> ?>
    </div>
    <?php // echo $site->copyright()->kirbytext() ?>
</footer>

<?php echo js(array(
    'assets/js/app.min.js',
)) ?>

</div>

</body>
</html>