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
				Gaurdian: <input class="form-control" type="text" name="guardian">
			</div>
			<div class="container mb-1">
				Contact Number: <input class="form-control" type="text" name="contact" placeholder="+639123456789">
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
$first_name = $last_name = $middle_name = $address = $dob = $pob = $guardian = $gender = $civil = $yearlevel = $course = $schoolyear = "";

   include('utilities/validation.php');

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $gender = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $contact = $_POST['contact'];
    $civil = $_POST['civil'];
    $yearlevel = $_POST['yearlevel'];
    $course = $_POST['course'];
    $schoolyear = $_POST['schoolyear'];
    
    $requiredFields = array($first_name,
    $middle_name,
    $last_name,
    $address,
    $dob,
    $pob,
    $gender,
    $guardian,
    $contact,
    $civil,
    $yearlevel,
    $course,
    $schoolyear
    );
    $countEmp=0;
    for($a = 0; $a != count($requiredFields); $a++){
        if(isEmpty($requiredFields[$a])){
            if ($a<3){
                if(validate($requiredFields[$a])){
                    continue;
                }else{
                    if ($a==0){
                        echo "Firstname must not be empty.<br> Must not be less than 2 characters. <br> Must not contain number. <br>";
                    }else if($a==1){
                        if(isString($requiredFields[$a])){
                            echo "Middlename must not be empty.<br> Must not contain number. <br>";
                        }else{
                            continue;
                        }
                    }else if($a==2){
                        echo "Lastname must not be empty.<br> Must not be less than 2 characters. <br> Must not contain number. <br>";
                    }else{
                        continue;
                    }
                }  
            }else if ($a==8){
                if(checkIntLenBegin($requiredFields[$a])){
                    continue;
                }else{
                    echo "Please input a valid number.<br>";
                }
            }else {
                continue;
            }
        }else{
            $countEmp++;
        }
    }
    if($countEmp!=0){
        echo "Fields must not be empty.<br>";
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
echo $guardian;
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