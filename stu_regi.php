<?php
$firstname = $_POST['firstname'] ?? '';

if (empty($firstname)) {
    // Redirect back with error
    header("Location: form.php?error=firstname");
    exit();
}

// Collect all values (no error checking for other fields here)
$lastname = $_POST["lastname"] ?? '';

if (empty($lastname)) {
    // Redirect back with error
    header("Location: form.php?error=lastname");
    exit();
}

$father_name = $_POST["father_name"] ?? '';
$mobile = $_POST["mobile"] ?? '';
$dob_day = $_POST["dob_day"] ?? '';
$dob_month = $_POST["dob_month"] ?? '';
$dob_year = $_POST["dob_year"] ?? '';
$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';
$choice = $_POST["choice"] ?? '';
$department = $_POST["department"] ?? '';
$city = $_POST["city"] ?? '';
$address = $_POST["address"] ?? '';

echo "<h1>Submitted Registration Details</h1>";
echo "First Name = $firstname - Last Name = $lastname <br>
Father's name = $father_name <br>
Date of Birth = $dob_day-$dob_month-$dob_year <br>
Mobile Phone Number = $mobile <br>
Email = $email <br>
Password = $password <br>
Gender = $choice<br>
Department = $department<br>
City = $city<br>
Address = $address<br>";
?>
