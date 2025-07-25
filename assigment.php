<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            padding: 30px;
        }

        h2 {
            color: #333;
        }

        .error {
            color: red;
            font-size: 16px;
            /* Added padding/margin for better visual */
            padding: 10px 0;
            margin-bottom: 10px;
        }

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post" action="regiform.php">
    <label>Student Name :</label>
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name"><br><br>

    <label>Father's Name :</label>
    <input type="text" name="father_name"><br><br>

    <label>Date of birth :</label>
    <input type="text" name="dob_day" placeholder="Day">
    <input type="text" name="dob_month" placeholder="Month">
    <input type="text" name="dob_year" placeholder="Year">(DD-MM-YYYY)<br><br>

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
        <option value="HTML/CSS">HTML/CSS</option>
        <option value="AI">AI</option>
        <option value="PHP">PHP</option>
    </select><br><br>

    <label>City :</label>
    <input type="text" name="city"><br><br>

    <label>Address:</label><br>
    <textarea name="address" rows="4" cols="40"></textarea><br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>
