<?php
/*script with strings exercises*/
$str = "Caramello";
//get the length of a string
echo $str . " lunghezza => " . strlen($str);
echo "<br>";
//using substr() to get a part of a string, parameters substr(STRING, CHAR START, NUM OF CHARS)
$data = "30/06/2025";
$day = substr($data, 0, 2);
$month = substr($data, 3, 2);
$year = substr($data, 6);
echo "<br> la data è " . $data . ", dove l'anno è " . $year . ", il mese è " . $month . " e il giorno è " . $day;
echo "<br> <br>";
//searching a part of a string with strpose(), parameters strpose(STRING, STRING TO SEARCH, CHAR TO START FROM)
//returns the position or FALSE if not found
$nascita = "La mia data di nascita è il 07 dicembre 1986";
$pos = strpos($nascita, "dicembre");
echo $pos . "<br> <br>";
//reverse a string strrev()
echo strrev("CAT"); 
?>