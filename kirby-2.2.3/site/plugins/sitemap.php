<?php
$exclude = c::get('sitemap.exclude', array('error', 'projects/old'));
$important = c::get('sitemap.important', array('projects'));
kirby()->routes(array(
    array(
        'pattern' => 'sitemap.xml',
        'action'  => function() use ($exclude, $important) {
          $sitemap = '<?xml version="1.0" encoding="utf-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
          foreach(site()->pages()->visible()->index() as $p){
            if(!in_array($p->uri(), $exclude)){
              $sitemap .= '<url><loc>' . html($p->url());
              $sitemap .= '</loc><lastmod>' . $p->modified('c') . '</lastmod><priority>';
              $sitemap .= ($p->isHomePage()||in_array($p->uri(), $important)) ? 1 : 0.6/$p->depth();
              $sitemap .= '</priority></url>';
            }
          }
          $sitemap .= '</urlset>';
          return new Response($sitemap, 'xml');
        }
    )
));