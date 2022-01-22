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

    <h1>Class Objects and Constructors</h1>

    <?php
      // create a book class
      class Book
      {
        var $name;
        var $title;
        var $author;
        var $pages;

        function __construct($aName, $aTitle, $aAuthor, $aPages)
        {
          $this->name = $aName;
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }

      }
      // init
      $book1 = new Book("Book 1", "Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Book 2", "Lord Of The Rings", "Tolkien", 700);

      echo "<h3>",$book1->name, "</h3> <br>";
      echo $book1->title, "<br>";
      echo $book1->author, "<br>";
      echo $book1->pages, "<br>";

      echo "<h3>",$book2->name, "</h3> <br>";
      echo $book2->title, "<br>";
      echo $book2->author, "<br>";
      echo $book2->pages, "<br>";
    ?>

    <h1>Object Functions</h1>

    <?php
      class Student
      {
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa)
        {
          $this->name = $name;
          $this->major = $major;
          $this->gpa = $gpa;
        }

        function hasHonors()
        {
          if($this->gpa >= 3.5)
          {
            return "true <br>";
          }

          return "false <br>";
        }
      }

      $student1 = new Student("Brandon", "Computer Eng", 3.9);
      $student2 = new Student("Daniel", "Computer Science", 3.4);
      $student3 = new Student("Celena", "Art", 3.3);

      echo $student1->hasHonors();
      echo $student2->hasHonors();
      echo $student3->hasHonors();
    ?>

    <h1>Challenge: Anime class</h1>

    <?php
      // create a anime class that will take three varaibles: name, score(0-10), genre
      // create a constructor that overwrites those three varaibles from the user inputs
      // create a custom function for checking the score, whether it is bad, soso, or amazing
      // output everything including all the variables and score checking results

     ?>

  </body>
</html>
