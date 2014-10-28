<?php
add_theme_support('post-thumbnails');

//gets the slug of the current page
function get_slug(){
  $uri = $_SERVER['REQUEST_URI'];
  $reversed = strrev($uri);
  preg_match('#/.+?/#', $reversed, $matches);
  $slugReversed = $matches[0];
  $slugSlashes = strrev($slugReversed);
  $slug = preg_replace('#/#', '', $slugSlashes);
  return $slug;
}
