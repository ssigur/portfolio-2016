<footer class="footer cf scene_element scene_element--fade-in-up" role="contentinfo">

    <div class="colophon">
        <?php echo page('footer')->text()->kirbytext() ?>
        <?php // <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a> ?>
    </div>
    <?php // echo $site->copyright()->kirbytext() ?>
</footer>



</div>
<?php snippet('loader') ?>
<?php echo js(array(
    'assets/js/libraries.js',
    'assets/js/app.min.js',
)) ?>
<link href='https://fonts.googleapis.com/css?family=Roboto:300,500,900' rel='stylesheet' type='text/css'>
<?php snippet('googleanalytics') // ! \\ \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  ?>

</body>
</html>