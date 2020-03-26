<?php
class Fruit {
  public $name;
  public $color;
  public $servername = "localhost";
  public $username = "root";
  public $password = "root";
  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function get_all() 
  {
    $conn = new mysqli($this->servername, $this->username,$this->password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE $this->name";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
  }
}
// exemples ;
$oui = new Fruit("oui");
$non = new Fruit("non");
$oui->get_all() ; 
$non->get_all() ; 
?>
 