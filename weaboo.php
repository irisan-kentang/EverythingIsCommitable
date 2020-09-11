<?php

class Weaboo
{
  private $name;
  
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }
  
  public function weeb()
  {
    return $this->name . " wibu";
  }
}

$wibu = new Weaboo();
echo $wibu->setName('Okka')
          ->weeb();
