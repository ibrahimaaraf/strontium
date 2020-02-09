<html>
<body>

<?php

$num=10;
$array=array(1,2,3,4,5,6,7,8,9,10,15,12,11,14,13);

function Search_Array($num,$array)
{
	for($i=0;$i<count($array);$i++)
	{
		if($num==$array[$i])
		{
			echo  "Searched number is ".$i."<br>";
		}
	}
}
Search_Array($num,$array);

?>

</body>
</html>
