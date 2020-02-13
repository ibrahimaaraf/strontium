<html>
<body>  

<?php
class InformationForm
 {
  
  public $name;
  public $gender;
  public $degree;
  public $email;
  
   function __construct($name,$email,$gender) 
   {
	   
    $this->name = $name;
	
	$this->email = $email;
	
	$this->gender = $gender;
	
   }
  

  
  function set_name($name)
  {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }
  
}
?>

<?php
$nameError=$emailError=$genderError=" ";
$name = $email = $gender ="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if (empty($_POST["name"]))
	{
		$nameError="Name is required";
	}
	else
	{
		$name=$_POST["name"];
	}
    if (empty($_POST["email"]))
	{
		$emailError="email is required";
	}
	else
	{
		$email=$_POST["email"];
	}
	
	if (empty($_POST["gender"]))
	{
		$genderError=" Please enter your Gender";
	}
	else
	{
		$gender=$_POST["gender"];
	}
	/*if (empty($_POST["name"]) || ($_POST["email"]) || ($_POST["gender"]))
	{
		$nameError=$emailError=$genderError="Fill the requirements ";
	}
	else
	{
			$name=$_POST["name"];
			$email=$_POST["email"];
			$gender=$_POST["gender"];
	}
	*/
}

?>

<h2>Please Fill up the following requirments </h2>
<p><span class="error"></span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameError;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <span class="error">* <?php echo $genderError;?></span>
  <br><br>
   
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo "<h2>"." data for : ".$name.":</h2>";

$info = new InformationForm($name,$email,$gender);

echo $info->get_name();

echo "<br>";

echo $info->get_email();

echo "<br>";

echo $info->get_gender();

echo "<br>";

?>

<?php

$file = fopen("User Info.txt", "a") or die("Unable to open the file!");

$data = $info->get_name()."\t";

fwrite($file, $data);

$data = $info->get_email()."\t";

fwrite($file, $data);

$data = $info->get_gender()."\n";

fwrite($file,$data);

fclose($file);


?>

<?php

  $dom = new DOMDocument();

    $dom->encoding = 'utf-8';

    $dom->xmlVersion = '1.0';

    $dom->formatOutput = true;

  $xml_file_name = 'Aaraf.xml';

    $root = $dom->createElement('Info');

    $root_node = $dom->createElement('root');

  $child_node_title = $dom->createElement('name', $info->get_name());

    $root_node->appendChild($child_node_title);

    $child_node_year = $dom->createElement('email', $info->get_email());

    $root_node->appendChild($child_node_year);

  $child_node_genre = $dom->createElement('gender', $info->get_gender());

    $root_node->appendChild($child_node_genre);

   
    $root->appendChild($root_node);

    $dom->appendChild($root);

  $dom->save($xml_file_name);
   
?>

</body>
</html>