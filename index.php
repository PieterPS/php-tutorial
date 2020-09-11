<?php 

  // local variable
  // =====================================

  // function myFunc (localVariable){
  //   $variable = localVariable;
  // }

  // global variable
  // =====================================
  
  $name = 'mario';

  // function myFuncTwo () {
  //   global $name;
  //   $name = 'yoshi';
  // }

  // myFuncTwo();
  // echo $name;

  // use global var as argument, it becomes local var
  function sayBye($name) {
    $name = 'wario';
    echo "bye $name";
  }

  // use global var as argument and keep it's global value to update etc.
  function sayByeTwo(&$name) {
    $name = 'wario';
    echo "bye $name";
  }

  sayByeTwo($name);
  echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first PHP file</title>
</head>
<body>

</body>
</html>