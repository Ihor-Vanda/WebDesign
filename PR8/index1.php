<?php
for ($x = 0; $x <= 10; $x++) {
   echo 'The number is: $x <br>';
}
echo "<br>";
for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
}
echo "<br>";
$index = 1;
echo "test ".$index." end of test";
echo "<br>Array<br>";
$days = ["Mon", "Tue", "Wed"];
echo "I like " . $days[0] . ", and hate " . $days[1] . " and " . $days[2] . ". <br>";

echo "Array Length: ".count($days)."<br>";

echo "<br>Asociate Array<br>";

$age = ["Mon" => "8:00", "Tue" => "9:00", "Wed" => "42"];
echo "Mon start at " . $age['Mon']."<br>";

foreach($age as $key => $value) {
   echo "Key=" . $key . ", Value=" . $value;
   echo "<br>";
}
