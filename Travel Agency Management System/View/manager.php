<?php include('Header.php');?>

<h1>Manager Page</h1>
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
class Manager{
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

$Manager1 = new Manager("Ibrahim", "01","27","Mirpur","0170009","21000");
echo $Manager1 -> message();
echo "<br>";
?>

<?php include('Footer.php');?>