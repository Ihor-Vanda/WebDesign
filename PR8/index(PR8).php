<?php

for($i = 0; $i < 5; $i++) {
	for($j = 0; $j < 10; $j++) {
		$array[$i][$j] = rand(0, 99);
	}
}

echo '<table border= "1" bordercolor= "black" width= 100% cellspacing= "0" cellpadding= "0">';
for($i = 0; $i < 5; $i++) {
	echo '<tr>';
	for($j = 0; $j < 10; $j++) {
		echo '<td align="center">';
		echo $array[$i][$j];
		echo '</td>';
	}
	echo '</tr>';
}
echo '</tbody></table>';