<?php

class Form {

  protected $post;
  protected $errors;

  public function __construct($errors,$method = 'POST')
  {
    if($method == 'POST') {
      $this->post = $_POST;
    } elseif($method == 'GET') {
      $this->post = $_GET;
    }
    $this->errors = $errors;
  }

  private function getValue($name)
  {
    $value = '';
    if(!empty($this->post[$name])) {
      $value = stripslashes($this->post[$name]);
    }
    return $value;
  }

  private function divArround($html)
  {
    return '<div class="formclass">'.$html.'</div>';
  }

  public function input($name,$type = 'text')
  {
    return $this->divArround('<input type="'.$type.'" name="'.$name.'" id="'.$name.'" value="'.$this->getValue($name).'">');
  }

  public function label($name, $nomchamp = '')
  {
    if(!empty($nomchamp)) {
      return '<label for="'.$name.'">'.$nomchamp.'</label>';
    }
    return '<label for="'.$name.'">'.ucfirst($name).'</label>';
  }

  public function error($name)
  {
    if(!empty($this->errors[$name])) {
      return '<span class="error">'.$this->errors[$name].'</span>';
    }
  }

  public function textarea($name)
  {
    return $this->divArround('<textarea name="'.$name.'">'.$this->getValue($name).'</textarea>');
  }

  public function submit($value, $name)
  {
    return '<input type="submit" name="'.$name.'" value="'.$value.'"/>';
  }
}
