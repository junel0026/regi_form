<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Data</title>
</head>
<body>

<?php
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';

if (empty($firstname)) {
    header("Location: assignment.php?error=firstname");
    exit();
}

if (empty($lastname)) {
    header("Location: assignment.php?error=lastname");
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
echo "First Name = $firstname , Last Name = $lastname<br>
Father's Name = $father_name <br>
Date of Birth = $dob_day-$dob_month-$dob_year <br>
Mobile Phone Number = $mobile <br>
Email = $email <br>
Password = $password <br>
Gender = $choice<br>
Department = $department<br>
City = $city<br>
Address = $address<br>";
?>

</body>
</html>
