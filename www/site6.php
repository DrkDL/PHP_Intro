<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 6</title>
  </head>
  <body>
    <h1>Advanced Calculator</h1>

    <form action = "site6.php" method = "post">
      First Number: <input type = "number" step = "0.001" name = "num1"> <br>
      Operator: <input type = "text" name = "op"> <br>
      Second Number: <input type = "number" step = "0.001" name = "num2"> <br>
      <input type = "submit">
    </form>

    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      if ($op == "+" || strtolower($op) == "add" || strtolower($op) == "addition")
      {
        echo $num1 + $num2, "<br>";
      }
      elseif ($op == "-" || strtolower($op) == "subtract" || strtolower($op) == "subtraction" || strtolower($op) == "minus")
      {
        echo $num1 - $num2, "<br>";
      }
      elseif ($op == "/" || strtolower($op) == "divide" || strtolower($op) == "division")
      {
        echo $num1 / $num2, "<br>";
      }
      elseif ($op == "*" || strtolower($op) == "multiply" || strtolower($op) == "multiplication" || strtolower($op) == "x")
      {
        echo $num1 / $num2, "<br>";
      }
      // challenge: add more operators (refer to site1.php with built-in math function)
      else
      {
        echo "Invalid Operator";
      }
    ?>

  </body>
</html>
