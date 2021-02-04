<?php

class Form
{
    protected $post;
    protected $errors;

    private $label;
    private $input;

    public function addInput($name)
    {
        return $this->label = '<form> <label for="' . $name . '">' . $name . '</label> </form>';
    }
}
