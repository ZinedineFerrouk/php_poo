<?php

class ChaineMaster
{
    private $text;

    public function __construct(string $str)
    {
        $this->text = $str;
    }

    public function gras()
    {
        return '<strong>' . $this->text . '</strong>' . '<br>' ;
    }

    public function italique()
    {
        return '<i>' . $this->text . '</i>' . '<br>';
    }

    public function souligne()
    {
        return '<s>' . $this->text . '</s>' . '<br>';
    }

    public function majuscule()
    {
        return '<p style="text-transform:uppercase">' . mb_strtoupper($this->text) . '</p>';
    }
}
