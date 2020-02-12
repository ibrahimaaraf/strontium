<html>
<head>
<title>InformationForm</title>
</head>
<body>  

<?php
class InformationForm
 {
  
  public $name;
  public $gender;
  public $bloodGrp;
  public $degree;
  public $email;
  public $date;
  
   function __construct($name,$email,$date,$gender,$degree,$bloodGrp) 
   {
	   
    $this->name = $name;
	
	$this->email = $email;
	
	$this->gender = $gender;
	
    $this->bloodGrp = $bloodGrp;
	
	$this->degree = $degree;
	
	$this->date = $date;
	
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
  function set_bloodGrp($bloodGrp)
  {
    $this->bloodGrp = $bloodGrp;
  }
  function get_bloodGrp() 
  {
    return $this->bloodGrp;
  }
  function set_degree($degree)
  {
    $this->degree = $degree;
  }
  function get_degree()
  {
    return $this->degree;
  }
  function set_date($date)
  {
    $this->date = $date;
  }
  function get_date()
  {
    return $this->date;
  }
  
}
?>

<?php
$nameError=$emailError=$genderError=$degreeError=$bloodGrpError=$dateError=" ";
$name = $email = $gender = $degree = $date = $bloodGrp="";

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
	if (empty($_POST["degree"]))
	{
		$degreeError=" Please enter your degree";
	}
	else
	{
		$degree=$_POST["degree"];
	}
	if (empty($_POST["bloodGrp"]))
	{
		$bloodGrpError=" Please enter your bloodGrp";
	}
	else
	{
		$bloodGrp=$_POST["bloodGrp"];
	}
	if (empty($_POST["dt1"]) || empty($_POST["dt2"])|| empty($_POST["dt3"]))
	{
		$dateError = "Date is required";
	}	 
	else 
	{
		$date = $_POST["dt1"]."/".$_POST["dt2"]."/".$_POST["dt3"];
	}
	if (empty($_POST["gender"]))
	{
		$genderError=" Please enter your Gender";
	}
	else
	{
		$gender=$_POST["gender"];
	}
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
  Date: <input type="text" name="dt1">/day <input type="text" name="dt2"> /month <input type="text" name="dt3"> /year
  <span class="error">*<?php echo $dateError;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <span class="error">* <?php echo $genderError;?></span>
  <br><br>
   Degree:
  <input type="checkbox" name="degree" value="Bsc.">Bsc.
  <input type="checkbox" name="degree" value="SSC">SSC
  <input type="checkbox" name="degree" value="HSC">HSC
  <input type="checkbox" name="degree" value="Phd">Phd.
  
  <span class="error">* <?php echo $degreeError;?></span>
  <br><br>
  
   BloodGroup:
   <select name="bloodGrp">
   <option value="Select">Select</option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  </select>
  
  
  <span class="error">* <?php echo $bloodGrpError;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo "<h2>"." data for : ".$name.":</h2>";

$info = new InformationForm($name,$email,$date,$gender,$degree,$bloodGrp);

echo $info->get_name();

echo "<br>";

echo $info->get_email();

echo "<br>";

echo $info->get_date();

echo "<br>";

echo $info->get_degree();

echo "<br>";

echo $info->get_gender();

echo "<br>";

echo $info->get_bloodGrp();
?>

</body>
</html>