<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  titleContent:
    label: Content title
    type:  text
  text:
    label: Content
    type:  textarea
  background:
    label: Image de fond
    type:  selector
    mode:  single
    types:
      - image