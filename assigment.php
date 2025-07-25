<!DOCTYPE HTML>
<html>
<head>
  <style>
    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>

<h1> Student Registration Form </h1>
<form action="regiform.php" method="post">
  Student Name:
  <input type="text" name="firstname" placeholder="First name">
  <span class="error">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'firstname') {
        echo "First name is required";
    }
    ?>
  </span>

  <input type="text" name="lastname" placeholder="Last Name">
  <span class="error">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'lastname') {
        echo "Last name is required";
    }
    ?>
  </span><br><br>

  <label>Father's Name :</label>
  <input type="text" name="father_name"><br><br>

  <label>Date of Birth :</label>
  <input type="text" name="dob_day" placeholder="Day">
  <input type="text" name="dob_month" placeholder="Month">
  <input type="text" name="dob_year" placeholder="Year"><br><br>

  <label>Mobile Number : +95 -</label>
  <input type="text" name="mobile"><br><br>

  <label>Email :</label>
  <input type="email" name="email" placeholder="name23@gmail.com"><br><br>

  Password:
  <input type="text" name="password"><br><br>

  Gender:<br>
  <input type="radio" name="choice" value="Male"> Male
  <input type="radio" name="choice" value="Female"> Female<br><br>

  Department:<br>
  <input type="radio" name="department" value="English"> English
  <input type="radio" name="department" value="Computer"> Computer
  <input type="radio" name="department" value="Business"> Business<br><br>

  <label for="course">Course :</label>
  <select name="course" id="course">
    <option value="Choose">Choose</option>
    <option value="Social">Social Studies</option>
    <option value="Computer">Computer Studies</option>
    <option value="English">English</option>
    <option value="Music">Music</option>
  </select><br><br>

  City:
  <input type="text" name="city"><br><br>

  Address:<br>
  <textarea name="address" rows="4" cols="50"></textarea><br><br>

  <input type="submit" value="Register">
</form>

</body>
</html>
