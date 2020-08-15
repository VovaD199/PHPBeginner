<?php
echo "<!DOCTYPE html> <html lang='en'> <body>";
include("header.php");
//++++=======
echo "<h1>Hello, NIX Education</h1>";
echo "word php<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "<br> Таблица умножения на:",$i,"<br>";
    for ($j =1; $j <= 10; $j++){
        echo $i, " x ", $j," = ", $i*$j, "<br>";
    }

}

echo "<br>";
//include("$data[0]");
include("footer.php");
echo "</body></html>";

