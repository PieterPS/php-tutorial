<?php 

  // include - carry on with rest of php after errer
  // ===================================================================

  include('ninjas.php');
  include 'ninjas.php';

  echo 'end of php';

  // require - fatal error stops the code
  // ===================================================================

  require('ninjas.php');
  require 'ninjas.php';

  echo 'end of php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first PHP file</title>
</head>
<body>

<?php include('content.php') ?>

</body>
</html>