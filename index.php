<?php

// // $apple = "hello world welcome to new";

// // echo str_word_count($apple);

// //magic methods 

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "The line number " . __LINE__;
// echo "<br>";

// echo "The file name " . __FILE__;
// echo "<br>";
// echo "The directory name " . __DIR__;
// echo "<br>";
// function test()
// {
//           return __FUNCTION__;
// }

// echo test();
// echo "<br>";



// class Fruit
// {
//           public $name;
//           public $color;

//           function __construct($name, $color)
//           {
//                     $this->name = $name;
//                     $this->color = $color;
//           }

//           function myFruit()
//           {
//                     return "The fruit is " . $this->name . " and the color is " . $this->color . ".";
//           }
// }

// $obj = new Fruit('apple', 'red');
// echo $obj->myFruit();




// function myTest()
// {
//           return "hello world am from function " . __FUNCTION__;
// }

// echo myTest();


//function arguments



// function familyName($fname, $year)
// {
//           return "$fname Refsnes. Born in $year <br>";
// }
// echo familyName("Hege", "1975");
// echo familyName("Stale", "1978");
// echo familyName("Kai Jim", "1983");
// echo familyName("Borge", "1984");


//default argument value
function familyName($fname, $year = "2024")
{
          return "$fname Refsnes. Born in $year <br>";
}
echo familyName("Hege", "1975");
echo familyName("Stale", "1978");
echo familyName("Kai Jim");
echo familyName("Borge", "1984");
