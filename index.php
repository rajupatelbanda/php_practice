<?php

// $apple = "hello world welcome to new";

// echo str_word_count($apple);


class Fruit
{
          public $name;
          public $color;

          function __construct($name, $color)
          {
                    $this->name = $name;
                    $this->color = $color;
          }

          function myFruit()
          {
                    return "The fruit is " . $this->name . " and the color is " . $this->color . ".";
          }
}

$obj=new Fruit();
echo $obj->myFruit('apple','red');



