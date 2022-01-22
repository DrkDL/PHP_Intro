<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 8</title>
  </head>
  <body>

    <h1>Include Method</h1>

    <?php
    $title = "My First Post";
    $author = "Derek";
    $wordCount = 400;
    include "header.php";
    $wordCount = 1000;
    echo $wordCount;
    ?>



    <?php include "footer.php" ?>

    <h1>Function</h1>

    <?php
    include "randomFunc.php";
    echo $feetInMile;
    ?>

    <h1>Class and Objects</h1>

    <?php
      // create a book class
      class Book
      {
        var $name;
        var $title;
        var $author;
        var $pages;
      }
      // init
      $book1 = new Book;
      $book1->name = "Book 1";
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 400;

      echo "<h3>",$book1->name, "</h3> <br>";
      echo $book1->title, "<br>";
      echo $book1->author, "<br>";
      echo $book1->pages, "<br>";

      $book2 = new Book;
      $book2->name = "Book 2";
      $book2->title = "Derek Is Awesome";
      $book2->author = "Derek";
      $book2->pages = 10000;

      echo "<h3>",$book2->name, "</h3> <br>";
      echo $book2->title, "<br>";
      echo $book2->author, "<br>";
      echo $book2->pages, "<br>";
    ?>

    <h1>Constructors</h1>

    

  </body>
</html>
