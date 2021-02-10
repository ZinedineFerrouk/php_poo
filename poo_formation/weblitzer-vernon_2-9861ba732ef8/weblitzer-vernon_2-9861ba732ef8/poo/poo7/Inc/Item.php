<?php

namespace Inc;
/**
 *
 */
class Item
{
  protected $price;


  protected $name;



  public function setName($data)
  {
    $this->name = $data;
  }

  public function showPriceATI()
  {
      return $this->price * 1.2;
  }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}
