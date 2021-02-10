<?php
namespace Inc;


/**
 *
 */
class Food extends Item
{
    protected $brand;


    protected $type;
    protected $expiry;

    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function showExpiry()
    {
        return date('d/m/Y',strtotime($this->expiry));
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @param mixed $expiry
     */
    public function setExpiry($expiry): void
    {
        $this->expiry = $expiry;
    }

}
