<?php
// Les Méthodes ou Fonctions magiques s'éxecutent automatiquement suite à un évenement
// Nous avons donc aucun besoin de les appeler au sein du code

class PHPString
{
    private $str;
    private $length;

    public function __construct(string $param)
    {
        $this->str = $param;
        $this->length = mb_strlen($this->str);
    }

    // Afin d'accéder a la propriété $str a l'extérieur de la class nous allons utiliser
    // La méthode magique __get(), elle va s'éxecuter automatiquement lorqu'on veut accéder 
    // A une propriété inaccessible (private) 
    public function __get($var)
    {
        // echo 'L\'attribut ' . $var . ' est innaccessible.';
        return $this->$var;
    }

    // La méthode magique __set(), elle va s'éxecuter automatiquement lorqu'on veut modifier 
    // une propriété inaccessible (private)
    // Il prend 2 arguments : 1 - Le nom de l'attribut; 2 - La valeur qu'on lui assigne
    public function __set($var, $value)
    {
        // echo 'Vous essayez d\'affecter ' . $value . ' à ' . $var;
        $this->$var = $value;
    }

    public function __toString()
    {
        return $this->str;
    }

    // Vérifie si une valeur est attribuer a un attribut de la classe
    public function __isset($var)
    {
        return isset($this->$var);
    }

    // Vérifie si une valeur n'est pas attribuer a un attribut de la classe
    public function __unset($var)
    {
        unset($this->$var);
    }
}

$str = new PHPString('POO');
// $str->str = 'Salut';
unset($str->str);
echo isset($str->str) ? 'Existe !!!' : 'N\'existe pas !!!';
// echo $str;
// echo $str->length; 
// Retourne "L'attribut length est innaccessible." si la ligne 20 est éxecuter sinon retourne le contenu de la variable appeler



/////////////////////// RIEN A VOIR ////////////////
echo '<br>';
echo '<br>';

// PGCD
function calculPGCD(int $a, int $b)
{
    if ($a > $b) {
        $x = $a;
        $y = $b;
    } else {
        $x = $b;
        $y = $a;
    }

    while ($x % $y !== 0) {
        $reste = $x % $y;
        $x = $y;
        $y = $reste;
    }

    echo 'Le PGDC de ' . $a . ' et ' . $b . ' vaut -> ' . $y;
}

calculPGCD(100, 50);

echo '<br>';



















// RIEN A VOIR C'ETAIT JUSTE POUR M'ENTRAINER
// class User
// {
//     private $name;
//     private $age;

//     public function __construct(string $name, int $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getUser()
//     {
//         return 'Bonjour ' . $this->name . ', tu as ' . $this->age . ' ans.';
//     }
// }

// $user = new User('Zinedine', 22);
// echo $user->getUser();
