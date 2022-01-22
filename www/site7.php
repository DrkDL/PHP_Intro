<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 7</title>
  </head>
  <body>
    <h1>Switch Statement</h1>
    <!--
    <form action = "site7.php" method = "post">
      What was your grade?
      <input type = "text" name = "grade">
      <input type = "submit">
    </form>-->

    <?php /*
      $grade = $_POST["grade"];
      switch(strtoupper($grade))
      {
        case "A":
          echo "You did amazing!";
          break;

        case "B":
          echo "You did pretty good.";
          break;

        case "C":
          echo "You did fine.";
          break;

        case "D":
          echo "You need more improvements.";
          break;

        case "F":
         echo "You failed miserably.";
         break;
      }
      */
      ?>

      <h1>While Loop</h1>

      <?php
      /*
        $index = 1;

        while($index <= 5)
        {
          echo "$index <br>";
          $index++; // $index = $index + 1 or $index += 1
        }

        do
        {
          echo "$index <br>";
          $index++;
        }while($index <= 5);
        */
      ?>

      <h1>For Loop</h1>

      <?php
      /*
        for($i = 1; $i <= 5; $i++)
        {
          echo "$i <br>";
        }
      */

      // for loop with Array
      $luckyNumbers = array(4, 8, 14, 16, 23, 42);
      for ($i = 0; $i <= count($luckyNumbers); $i++)
      {
        echo "$luckyNumbers[$i] <br>";
      }

      ?>

  </body>
</html>
