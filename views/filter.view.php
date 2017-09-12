<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>filter</title>
  </head>
  <body>

    <form class="" action="controllers/filterController.php" method="post">
      <p><label><input type="radio" name="coiling_way" value="hot">HOT</label>
      <label><input type="radio" name="coiling_way" value="cold">COLD</label></p>
      <p><label><input type="checkbox" name="trimming_machine" value="checked">Trimming machine</label>
      <label><input type="checkbox" name="looping_machine" value="checked">Looping machine</label>
      <label><input type="checkbox" name="power_reel" value="checked">Power reel</label></p>
      <p><input type="submit" value="Search"></p>
    </form>

  </body>
</html>
