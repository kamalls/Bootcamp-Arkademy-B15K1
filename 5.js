<?php
function printSquare($n)
{
	$i;
	$x;
	for ($i = 1; $i <= $n; $i++)
	{
		for ($x = 1; $x <= $n; $x++)
		{
			if ($i == 1 || $i == $n ||
				$x == 1 || $x == $n)
				print ("*");
			else
				print (" ");
				print (" ");
		}
		echo "\n";
	}

}
	$rows = 4;
	printSquare($rows);
?>