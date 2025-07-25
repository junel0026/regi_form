<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            padding: 30px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        .error {
            color: red;
            font-size: 16px;
            padding: 10px 0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php

$errors = [];
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
$father_name = isset($_POST['father_name']) ? $_POST['father_name'] : '';
$dob_day = isset($_POST['dob_day']) ? $_POST['dob_day'] : '';
$dob_month = isset($_POST['dob_month']) ? $_POST['dob_month'] : '';
$dob_year = isset($_POST['dob_year']) ? $_POST['dob_year'] : '';
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$department = isset($_POST['department']) ? $_POST['department'] : '';
$course = isset($_POST['course']) ? $_POST['course'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';


if (empty($first_name)) {
    $errors[] = "fname is required." . "<br>";
}

if (empty($last_name)) {
    $errors[] = "lname is required.". "<br>";
}

if (empty($father_name)) {
    $errors[] = "father is required.". "<br>";
}

if (empty($dob_day)) {
    $errors[] = "day is required.". "<br>";
}

if (empty($dob_month)) {
    $errors[] = "month is required.". "<br>";
}

if (empty($dob_year)) {
    $errors[] = "year is required.". "<br>";
}

if (empty($mobile)) {
    $errors[] = "mobile is required.". "<br>";
}

if (empty($email)) {
    $errors[] = "email is required.". "<br>";
}

if (empty($password)) {
    $errors[] = "password is required.". "<br>";
}

if (empty($gender)) {
    $errors[] = "gender is required.". "<br>";
}

if (empty($department)) {
    $errors[] = "department is required.". "<br>";
}

if (empty($course)) {
    $errors[] = "course is required.". "<br>";
}

if (empty($city)) {
    $errors[] = "city is required.". "<br>";
}

if (empty($address)) {
    $errors[] = "address is required.". "<br>";
}


echo "<h1>Form Submission Result</h1>";

if (!empty($errors)) {
    // If there are errors, display them
    echo '<div class="error">';
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    echo '</div>';

    echo "<br>";
    echo "Name: " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "<br>";
    echo "Father's Name: " . htmlspecialchars($father_name) . "<br>";
    echo "DOB: " . htmlspecialchars($dob_day) . "-" . htmlspecialchars($dob_month) . "-" . htmlspecialchars($dob_year) . "<br>";
    echo "Mobile: +95 - " . htmlspecialchars($mobile) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Department: " . htmlspecialchars($department) . "<br>";
    echo "Course: " . htmlspecialchars($course) . "<br>";
    echo "City: " . htmlspecialchars($city) . "<br>";
    echo "Address: " . nl2br(htmlspecialchars($address)) . "<br>";


} else {
    echo "Name: " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "<br>";
    echo "Father's Name: " . htmlspecialchars($father_name) . "<br>";
    echo "DOB: " . htmlspecialchars($dob_day) . "-" . htmlspecialchars($dob_month) . "-" . htmlspecialchars($dob_year) . "<br>";
    echo "Mobile: +95 - " . htmlspecialchars($mobile) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Department: " . htmlspecialchars($department) . "<br>";
    echo "Course: " . htmlspecialchars($course) . "<br>";
    echo "City: " . htmlspecialchars($city) . "<br>";
    echo "Address: " . nl2br(htmlspecialchars($address)) . "<br>";
}

?>
</body>
</html>
