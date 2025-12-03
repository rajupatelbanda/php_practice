<?php
//indeexed aarrays

// $arr = ["apple", "banana", "orange"];
// // echo $arr[0];
// // echo "<br>";
// // echo $arr[1];
// // echo "<br>";
// // echo $arr[2];
// // echo "<br>";

// // foreach ($arr as $value) {
// //           echo $value;
// //           echo "<br>";
// // }


// // print_r($arr);
// // echo "<br>";

// // echo count($arr);
// // $result = array_push($arr, "grape", "mango");
// // print_r($arr);
// // echo "<br>";
// // array_pop($arr);
// // print_r($arr);
// // associative arrays

// $a = [
//           "name" => "john",
//           "age" => 25,
//           "city" => "new york",
//           "country" => "usa",
// ];

// // echo $a['name'];
// // echo "<br>";

// // foreach ($a as $key => $value) {
// //           echo "key is " . $key . " and value is " . $value;
// //           echo "<br>";
// // }


// //array functions for associative arrays

// print_r(array_keys($a));
// echo "<br>";
// print_r(array_values($a));
// echo "<br>";
// echo count($a);
// echo "<br>";
// //array merge
// $b = [
//           "job" => "developer",
//           "company" => "google",
// ];
// $c = array_merge($a, $b);
// print_r($c);
// echo "<br>";
// //array search
// $search = array_search("john", $a);
// echo $search;
// echo "<br>";
//array replace

// $persons = [
//           [
//                     "name" => "john",
//                     "age" => 25
//           ],
//           [
//                     "name" => "doe",
//                     "age" => 30
//           ],
//           [
//                     "name" => "alice",
//                     "age" => 28
//           ],
//           [
//                     "name" => "bob",
//                     "age" => 22
//           ]

// ];

// foreach ($persons as $person) {
//           echo "Name: " . $person['name'] . ", Age: " . $person['age'];
//           echo "<br>";
// }

$a = [
          "fruits" => ["apple", "banana", "orange"],
          "vegetables" => ["carrot", "broccoli", "spinach"],
          "grains" => ["rice", "wheat", "corn"]
];
// echo $a['fruits'][0];
// echo "<br>";
// echo $a['vegetables'][1];
// echo "<br>";
// echo $a['grains'][2];
// echo "<br>";
// foreach ($a as $category => $items) {
//           echo ucfirst($category) . ": ";
//           foreach ($items as $item) {
//                     echo $item . " ";
//           }
//           echo "<br>";
// }
print_r($a);
