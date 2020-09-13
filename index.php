<?php 

  // connect to database
  $conn = mysqli_connect('localhost', 'pieter', 'test1234', 'ninja_pizza');

  // check connection
  if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // write query for all pizzas - ordered by created_at date
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // make query & get result
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // clear result to free space
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

?>;

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php') ?>

  <h4 class="center grey-text">Pizzas!</h4>

  <div class="container">
    <div class="row">

      <?php foreach($pizzas as $pizza) { ?>

        <div class="col s6 m4">
          <div class="card z-depth-0">
            <div class="card-content center">
              <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
              <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
            </div>
            <div class="card-action right-align">
              <a href="#" class="brand-text">more info</a>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>

  <?php include('templates/footer.php') ?>

</html>