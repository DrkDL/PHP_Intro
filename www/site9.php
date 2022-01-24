<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 9</title>
  </head>
  <body>
    <h1>Setter and Getter for a class</h1>

    <?php
      class Movie
      {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
          $this->title = $title;
          $this->setRating($rating);
        }

        // getter
        function getRating()
        {
          return $this->rating;
        }

        //setter
        function setRating($rating)
        {
          $rating = strtoupper($rating);
          if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR" || $rating == "TV-MA")
          {
            $this->rating = $rating;
          }
          else
          {
            $this->rating = "NR";
          }
        }
      }
      // rating: G, PG, PG-13, R, NR, TV-MA
      $avengers = new Movie("Avengers", "r");
      $avengers->setRating("pg-13");
      echo $avengers->getRating();
     ?>

    <h1>Inheritance</h1>

    <?php
      class Chef
      {
        function makeChicken()
        {
          echo "The chef makes chicken <br>";
        }
        function makeSalad()
        {
          echo "The chef makes salad <br>";
        }
        function makeSpecialDish()
        {
          echo "The chef makes BBQ ribs <br>";
        }
      }

      class ItalianChef extends Chef
      {
        function makePasta()
        {
          echo "The chef makes pasta <br>";
        }

        function makeSpecialDish()
        {
          echo "The chef makes pizza <br>";
        }
      }

      $chef2 = new Chef();
      $chef = new ItalianChef();
      $chef->makeChicken();
      $chef->makePasta();
      $chef->makeSpecialDish();
      $chef2->makeSpecialDish();

     ?>

  </body>
</html>
