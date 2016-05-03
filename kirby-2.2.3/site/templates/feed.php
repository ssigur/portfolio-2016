<?php

echo page('projets')->children()->visible()->flip()->limit(10)->feed(array(
    'title'       => $page->title(),
    'description' => $page->desc(),
    'link'        => 'projets',
));

?>