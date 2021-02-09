<?php

class Form
{

  protected $post;
  protected $errors;

  public function __construct($errors, $method = 'POST')
  {
    if ($method == 'POST') {
      $this->post = $_POST;
    } elseif ($method == 'GET') {
      $this->post = $_GET;
    }
    $this->errors = $errors;
  }

  public function error($name)
  {
    if (!empty($this->errors[$name])) {
      return '<span>' . $this->errors[$name] . '</span>';
    }
  }

  // FORM
  public function formEnd()
  {
    return '</form>';
  }

  public function displayError($errors, $name)
  {
    return '<span>' . $errors[$name] . '</span>';
  }

  // INPUT 
  public function input($name, $type = 'text')
  {
    return '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" value="' . $this->getValue($name) . '">';
  }

  // INPUT 
  public function textarea($name)
  {
    return '<textarea name="' . $name . '" id="' . $name . '">' . $this->getValue($name) . '</textarea>';
  }

  // LABEL
  public function label($name)
  {
    return '<label for="' . $name . '">' . ucfirst($name) . '</label>';
  }

  // SUBMIT
  public function submit($text)
  {
    return '<input type="submit" name="submitted" value="' . $text . '">';
  }

  private function getValue($name)
  {
    $value = '';
    if (!empty($this->post[$name])) {
      $value = $this->post[$name];
    }
    return $value;
  }
}
?>

<span></span>