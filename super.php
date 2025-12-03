<?php

// super global variables 
session_start();
$_SESSION['name'] = "Raju Banda";

echo $_SESSION['name'];

session_unset();
session_destroy();

echo $_SESSION['name'];


setcookie("user", "Raju Banda", time() + 86400, "/"); // 86400 = 1 day

echo $_COOKIE['user'];
// cookie is deleted after browser is closed
setcookie("user", "Raju Banda", time() + 86400); // 86400 = 1 day
echo $_COOKIE['user'];
// super global variables
//$GLOBALS
$a = 10;
$b = 20;
echo $GLOBALS['a'] + $GLOBALS['b'];
function sum()
{
          $c = $GLOBALS['a'] + $GLOBALS['b'];
          echo $c;
}
sum();
// $_SERVER
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


// $_REQUEST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = htmlspecialchars($_REQUEST['name']);
          if (empty($name)) {
                    echo "Name is empty";
          } else {
                    echo $name;
          }
}
// form
// <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
// $_GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
          $name = htmlspecialchars($_GET['name']);
          if (empty($name)) {
                    echo "Name is empty";
          } else {
                    echo $name;
          }
}

// $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = htmlspecialchars($_POST['name']);
          if (empty($name)) {
                    echo "Name is empty";
          } else {
                    echo $name;
          }
}
