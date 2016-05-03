<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  oldurl:
    label: Url de l'ancien portfolio
    type:  text
    help:  Lien présent sur la lise des projet en acc & dans la rubrique projets