<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields:
    desc :
      label: Description
      type:  text
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
  desc:
    label: Description courte
    type:  textarea
  text:
    label: Contenu texte & images
    type:  textarea
  tags:
    label: Tags
    type:  tags

  seoSettings:
    label: SEO
    type: headline

  metaDescription:
    label: Meta Description propre au projet
    type:  textarea

  habillageSettings:
    label: Habillage du projet
    type: headline
    help: Images utilisés pour l'habillage en page d'accueil et en entête du projet

  homeBackground:
    label: Image de fond "home"
    type:  selector
    width: 1/2
    mode:  single
    filter: thumb
    types:
    - image
  headerBackground:
    label: Image de fond page "projet"
    type:  selector
    width: 1/2
    mode:  single
    size:  4
    types:
      - image

  pageSettings:
    label: Images en coeurs de page
    type: headline
    help: Visuels du projet

  visuels:
    label: Images page
    type:  selector
    mode:  multiple
    sort:  sort
    types:
    - image
