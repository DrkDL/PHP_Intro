<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 4</title>
  </head>
  <body>
    <h1>Array</h1>
    <!--
    <form action = "site4.php" method = "post">
      Password: <input type = "password" name = "password"> <br>
      <input type = "submit">
    </form>
    <br><br>
    -->
    <?php
      //echo $_POST["password"];
    ?>

    <?php /*
      $friends = array("Kevin", "Karen", "Vincent", "Emily");
      $friends[3] = 10;
      echo $friends[3],"<br>";
      echo count($friends);
      */
    ?>
    <!--
    <form action = "site4.php" method = "post">
      Apple: <input type = "checkbox" name = "fruits[]" value = "apple"> <br>
      Orange: <input type = "checkbox" name = "fruits[]" value = "orange"> <br>
      Grape: <input type = "checkbox" name = "fruits[]" value = "grape"> <br>
      Pear: <input type = "checkbox" name = "fruits[]" value = "pear"> <br>
      <input type = "submit">
    </form>
    -->
    <?php /*
      $fruits = $_POST["fruits"];
      echo $fruits[0];*/
    ?>

    <!-- Associated Arrays -->

    <form action = "site4.php" method = "post">
      <input type = "text" name = "student">
      <input type = "submit">
    </form>

    <?php
      $grades = array("James" => "A+", "Peter" => "B+", "Oscar" => "C-");
      echo $grades[$_POST["student"]];
    ?>

  </body>
</html>
