<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title></title>
</head>
<body>

	<div class="container form-control">
		<h2 class="">Register</h2>
		<form action="" method="post">
			<div class=" container mb-1">
				First name: <input type="text" name="first_name">
				Middle name: <input type="text" name="middle_name">
				Last name: <input type="text" name="last_name">
			</div>
			<div class="container mb-1">
				Address: <input class="form-control" type="text" name="address">
			</div>
			<div class="container mb-1">
				Date of Birth: <input class="form-control" type="date" name="dob">
			</div>
			<div class="container mb-1">
				Place of Birth: <input class="form-control" type="text" name="pob">
			</div>
			<div class="container mb-1">
				Gender:
				  <input type="radio" name="gender" value="female">Female
				  <input type="radio" name="gender" value="male">Male
				  <input type="radio" name="gender" value="other">Other
			</div>
			<div class="container mb-1">
				Gaurdian: <input class="form-control" type="text" name="gaurdian">
			</div>
			<div class="container mb-1">
				Contact Number: <input class="form-control" type="text" name="contact">
			</div>
			<div class="container mb-2">
				Civil Status: <input class="form-control" type="text" name="civil">
			</div>
			<div class=" container mb-1">

				Year Level: <select name="yearlevel">
        <option value="books">Books</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="php">PHP</option>
        <option value="js">JavaScript</option>
      </select>
				Course: <select name="course">
        <option value="books">Books</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="php">PHP</option>
        <option value="js">JavaScript</option>
      </select>
				School Year: <input type="text" name="schoolyear">
			</div>

		<input type="submit" name="submit" value="Submit">  

		</form>
	</div>

	<?php
// define variables and set to empty values
$first_name = $last_name = $middle_name = $address = $dob = $pob = $gaurdian = $gender = $civil = $yearlevel = $course = $schoolyear = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = test_input($_POST["first_name"]);
  $last_name = test_input($_POST["last_name"]);
  $middle_name = test_input($_POST["middle_name"]);
  $address = test_input($_POST["address"]);
  $dob = test_input($_POST["dob"]);
  $pob = test_input($_POST["pob"]);
  $gaurdian = test_input($_POST["gaurdian"]);
  $gender = test_input($_POST["gender"]);
  $civil = test_input($_POST["civil"]);
  $yearlevel = test_input($_POST["yearlevel"]);
  $course = test_input($_POST["course"]);
  $schoolyear = test_input($_POST["schoolyear"]);
}

  if ($first_name || $last_name || $middle_name || $address || $dob || $pob || $gaurdian || $gender || $civil || $yearlevel || $course || $schoolyear = "") {
  	$message = "you have empty inputs";
echo "<script type='text/javascript'>alert('$message');</script>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $first_name;
echo "<br>";
echo $last_name;
echo "<br>";
echo $middle_name;
echo "<br>";
echo $address;
echo "<br>";
echo $dob;
echo "<br>";
echo $pob;
echo $gaurdian;
echo "<br>";
echo $gender;
echo "<br>";
echo $civil;
echo "<br>";
echo $yearlevel;
echo "<br>";
echo $course;
echo "<br>";
echo $schoolyear;
?>

</body>
</html>