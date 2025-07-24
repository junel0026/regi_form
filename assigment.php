<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post" action="form-handler.php">
    <label>Student Name :</label>
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name"><br><br>

    <label>Father's Name :</label>
    <input type="text" name="father_name"><br><br>

    <label>Date of birth :</label>
    <input type="text" name="dob_day" placeholder="Day">
    <input type="text" name="dob_month" placeholder="Month">
    <input type="text" name="dob_year" placeholder="Year"><br><br>

    <label>Mobile Number : +95 -</label>
    <input type="text" name="mobile"><br><br>

    <label>Email :</label>
    <input type="email" name="email" placeholder="name23@gmail.com"><br><br>

    <label>Password :</label>
    <input type="password" name="password"><br><br>

    <label>Gender :</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>

    <label>Department :</label>
    <input type="radio" name="department" value="English"> English
    <input type="radio" name="department" value="Computer"> Computer
    <input type="radio" name="department" value="Business"> Business<br><br>

    <label>Course :</label>
    <select name="course">
        <option value="">Choose</option>
        <option value="Diploma">Diploma</option>
        <option value="Bachelor">Bachelor</option>
        <option value="Master">Master</option>
    </select><br><br>

    <label>City :</label>
    <input type="text" name="city"><br><br>

    <label>Address:</label><br>
    <textarea name="address" rows="4" cols="40"></textarea><br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>