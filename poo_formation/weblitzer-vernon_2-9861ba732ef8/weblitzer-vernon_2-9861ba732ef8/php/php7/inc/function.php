<?php

function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}


function validText($errors,$data,$key,$min = 3, $max = 60)
{
  if(!empty($data)) {
    if(mb_strlen($data) < $min) {
      $errors[$key] = 'Min '.$min.' caractères';
    }elseif(mb_strlen($data) > $max) {
      $errors[$key] = 'Max '.$max.' caractères';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ';
  }
  return $errors;
}

function validEmail($errors,$data,$key)
{
  if(!empty($data)) {
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
      $errors[$key] = 'Veuillez renseigner un email valide';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ';
  }
  return $errors;
}
