<?php
//Form Input Lists//
$Fullname = $_POST['Fullname'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];
$Username = $_POST['Username'];
$Facebook = $_POST['Facebook'];
$Birthday = $_POST['Birthday'];
$Age = $_POST['Age'];

//DATABASE CONNECTION//

$conn = new mysqli("localhost","root","","it224db");

if($conn->connect_error){
  die('Connection Failed');
}

else{
  $stmt = $conn->prepare("insert into form(Fullname, Email, Phone, Address, Username, Facebook, Birthday, Age)
  values(?, ?, ?, ?, ?, ?, ?, ?)");

  $stmt->bind_param("ssisssii",$Fullname, $Email, $Phone, $Address, $Username, $Facebook, $Birthday, $Age);
  $stmt->execute();
  echo "Registration Complete...";
  $stmt->close();
  $conn->close();

}


?>
