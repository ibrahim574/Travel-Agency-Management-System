<?php include('Header.php');?>
<h1>Employee Page</h1>
<hr>
<?php
session_start();
if (isset($_SESSION['username'])) {
	echo "Name: " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "<br />";
	echo "Email: " . $_SESSION['email'] . "<br />";
	echo "Username: " . $_SESSION['username'] . "<br />";
	echo "User Password: " . $_SESSION['password'] . "<br />";
}
?>
<?php
class Employee{
  public $name; 
  public $id;
  public $age;
  public $address;
  public $phone_number;
  public $Salary;
  
  public function __construct($name, $id,$age,$address,$phone_number,$Salary) {
    $this->name = $name;
    $this->id = $id;
	$this->age = $age;
	$this->address = $address;
	$this->phone_number = $phone_number;
	$this->Salary = $Salary;
  }
  public function message() {
    return "Name: " . $this->name."<br>". "ID : " . $this->id."<br>". "Age: " . $this->age."<br>". "Address : " . $this->address."<br>". "Phone_Number : " . $this->phone_number."<br>"."Salary :".$this->Salary;
  }
}

$Employee1 = new Employee("Sakib", "111","21","Badda","016980009","16000");
echo "Employee SL 1";
echo "<br>";
echo $Employee1 -> message();
echo "<br>";
echo "___________________<br>";

$Employee2 = new Employee("Tamim", "110","23","Mirpur","019770009","16000");
echo "Employee SL 2";
echo "<br>";
echo $Employee2 -> message();
echo "<br>";
echo "___________________<br>";

$Employee3 = new Employee("Hamim", "112","22","Mirpur","018675409","21000");
echo "Employee SL 3";
echo "<br>";
echo $Employee3 -> message();
echo "<br>";
echo "___________________<br>";

$Employee4 = new Employee("Mustafizur", "113","22","Uttoera","01702439","21000");
echo "Employee SL 4";
echo "<br>";
echo $Employee4 -> message();
echo "<br>";
echo "___________________<br>";
?>


<?php include('Footer.php');?>
