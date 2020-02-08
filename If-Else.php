<html>
<body>

<?php

$num = 11;
$num1 = 100;

function Odd_Even($value)
{
	if($value%2==0)
		{
		echo "The given number is " . $value . " which is even","<br>";
		}
	else
		{
		echo "The given number is " . $value . " which is odd","<br>";
		}
}

Odd_Even($num);

Odd_Even($num1);

?>

</body>
</html>
