<?php

function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function imagemovie($film)
{
  return '<img src="https://www.weblitzer.fr/formation/posters/'.$film['id'].'.jpg" alt="'.$film['title'].'" />';
}
