<?php
echo "-----PHP EXERCISE NUMBER 7:</br>";
        echo "</br>";

	echo"<table>";

	for ($i=1; $i < 11; $i++) { 
		echo "<tr>";

		for ($j=1; $j < 11 ; $j++) { 
			echo "<td>".$i * $j."</td>";
		}

		echo "</tr>";

	}

	echo "</table>";

?>