
<?php
echo "<h1> Student Registration Form </h1>";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$Fname = $_POST["Fname"];
$mobileph = $_POST["mobileph"];
$email = $_POST["email"];
$password = $_POST["password"];
$choice = $_POST["choice"];
$department = $_POST["department"];
$city = $_POST["$city"];
$address = $_POST["address"];

echo "First Name = $firstname -
Last Name = $lastname <br>
Father's name = $Fname <br>
Mobile Phone Number = $mobileph <br>
Email = $email <br>
Password = $password <br>
Gender = $choice<br>
Department = $department<br>
City = $city<br>
Address = $address<br>";
?>