<html>
<body>

<?php

$l=3;
$v="A";
for($i=0;$i<$l;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo "*";
	}
	echo " ","<br>";
}

echo " ","<br>";

for($i=0;$i<$l;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		
		echo $v;
		$v++;
	}
	echo " ","<br>";
}

echo " ","<br>";

for($i=$l;$i>=0;$i--)
{
	for($j=0;$j<$i;$j++)
	{
		echo "*";
	}
	echo " ","<br>";
}