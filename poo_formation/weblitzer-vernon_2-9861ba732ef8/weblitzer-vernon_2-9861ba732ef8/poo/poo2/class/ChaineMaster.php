<?php

class ChaineMaster
{
  private $str;

  public function __construct(string $chaine)
  {
    $this->str = $chaine;
  }

  public function gras()
  {
    return '<strong>' . $this->str . '</strong>';
  }

  public function italic()
  {
    return '<i>' . $this->str . '</i>';
  }

  public function souligne()
  {
    return '<u>' . $this->str . '</u>';
  }

  public function majuscules()
  {
    return mb_strtoupper($this->str);
  }

}
