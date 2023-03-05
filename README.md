# patterns-using-php

<?php

echo "<h2>Basic  Rules to Print All Pattern</h2><br>";
echo "1) Run the outer FOR LOOP the number of times you are having the lines. <b>Outer FOR LOOP is for ROWS and Inner FOR LOOP is for COLUMNS.</b><br> 
2) How many colums are there with each row => Identify for every ROW numbers how many colums are there.<br>
3) What do you need to print?<br><br>";

echo "<b>Pattern 1<br></b>";

for ($i=0; $i <= 4; $i++)
{
      for ($j = 1; $j <= $i ; $j++)
      {
            echo "* ";
      }

      //? when first time loop will executed then to print in new line we print <br>
          echo "<br>";
}

echo "<br>";
echo "<b>Pattern 2<br><br></b>";

for ($i=0; $i <= 5; $i++)
{
      for ($j = 1; $j <= 5 ; $j++)
      {
            echo "* ";
      }
          echo "<br>";
}

echo "<br>";
echo "<b>Pattern 3<br><br></b>";

for ($i=5; $i >= 1; $i--)
{
      for ($j = 1; $j <= $i ; $j++)
      {
            echo "* ";
      }
          echo "<br>";
}

echo "<br>";
echo "<b>Pattern 4<br><br></b>";

$size = 5;
    
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 1; $i < $size ; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

?>
