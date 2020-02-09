<html>
<body>

<?php

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

for($i=10;$i<=100;$i++)
  {
	  Odd_Even($i);
  }

?>

</body>
</html>
