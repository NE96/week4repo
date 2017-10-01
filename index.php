<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br>";

$date = str_replace("-", "/", $date);
echo "The value of \$date: ".$date."<br>";

$comparison = strcmp($date, $tar);

if ($comparison > "0") {
	echo "the future";
}
elseif ($comparison < "0") {
	echo "the past";
}
else {
	echo "Oops";
}

echo "<br>";

$pos1 = strpos($date, "/");

$offset = $pos1 + 1;

$pos2 = strpos($date, "/", $offset);

echo "The positions of / in \$date are: ".$pos1.", ".$pos2."<br>";

$len = strlen($date);

echo "\$date has ".$len." characters."."<br>";

$teststr = "This is a test string!";

echo "\$teststr reads as: ".$teststr."<br>";

$val = ord($teststr);

echo "The ASCII value of \$teststr is ".$val."<br>";

$lastchars = substr($date, 8);

echo "The last two characters of \$date are: ".$lastchars."<br>";

$datearr = explode("/", $date);

echo "\$date as an array: ".$datearr[0].", ".$datearr[1].", ".$datearr[2]."<br>";

foreach ($year as $value) {
	switch ($value % 4) {
		case '0':
			switch ($value % 100) {
				case '0':
					switch ($value % 400) {
						case '0':
							echo "$value was a leap year: True<br>";
							break;
						
						default:
							echo "$value was a leap year: False<br>";
							break;
					}
					break;
				
				default:
					echo "$value was a leap year: True<br>";
					break;
			}
			break;
		
		default:
			echo "$value was a leap year: False<br>";
			break;
	}
}


?>