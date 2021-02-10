<?php

class Validation{

  public function validText($errors,$data,$key,$min = 3, $max = 60)
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

}
