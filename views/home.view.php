<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>
  </head>
  <body>
    <h1>Wellcome to HOME PAGE</h1>
    <p>
      <?php
        echo '<a href="http://' . $_SERVER['HTTP_HOST'] . '/machines">bring the machines!!!</a>';
      ?>
  </p>
  <p>
    <?php
      echo '<a href="http://' . $_SERVER['HTTP_HOST'] . '/about">Or tell me about Machines!</a>';
    ?>
  </p>
  </body>
</html>
