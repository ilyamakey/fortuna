<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fortuna main page</title>
    <style media="screen">
      .col {
        display: inline-block;
        text-align: center;
        border: 1px solid red;
        margin: 2px;
      }
      .col h3 {
        background-color: lime;
      }
      .round {
        border: 1px solid blue;
        margin: 2px;
      }
    </style>
  </head>
  <body>

    <?php foreach ($info as $key) : ?>

      <div class="round">

        <?php foreach ($key as $name => $val) :?>

          <?php if (!$val) continue; ?>

              <div class="col">
                <h3><?= $name; ?></h3>
                <p><?= $val;?></p>
              </div>

        <?php endforeach; ?>

      </div>

     <?php endforeach; ?>

  </body>
</html>
