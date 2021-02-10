<?php
namespace Inc;

/**
 *
 */
class Animal extends Item
{
    /**
     * @var
     */
    protected $birthday;
    /**
     * @var
     */
    protected $weight;

    /**
     * Animal constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public function showAge()
    {
        return $this->calculAge($this->getBirthday());
    }

    private function calculAge($date) {
        $age = date('Y') - date('Y', strtotime($date));
        if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
        }
        return $age;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

}
