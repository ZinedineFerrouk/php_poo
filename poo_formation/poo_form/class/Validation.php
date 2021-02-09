<?php

class Validation
{
    public function validateInput($errors, $input, $key, $min = '1', $max = '55')
    {
        if (!empty($input)) {
            if (mb_strlen($input) > $max) {
                $errors[$key] = 'Veuillez entrer un ' . $key . ' infèrieur à ' . $max . ' caractères';
            } elseif (mb_strlen($input) < $min) {
                $errors[$key] = 'Veuillez entrer un ' . $key . ' supérieur à ' . $min . ' caractères';
            }
        } else {
            $errors[$key] = 'Veuillez renseigner ce champ';
        }
        return $errors;
    }
}
