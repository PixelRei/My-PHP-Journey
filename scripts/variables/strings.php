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
echo strrev("CAT")."<br>"; 
//replace a part of a string
$str1 = "hello world";
echo str_replace("world", "me", $str1)."<br><br>";
//dividing a string with explode and implode
//explode creates an array
$data = "02/07/2025";
$array = explode("/", $data);
echo print_r($array);
$data2 = implode("/", $array);
echo "<br><br>la data era: $data2";
echo "<br>la prima lettera è $data2[0]"; //to access a char of a string use the string like an array
?>