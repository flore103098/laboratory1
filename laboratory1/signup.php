signup.php
<?php 
    include('../utilities/validation.php');

    $Firstname = $_POST['fname'];
    $Middlename = $_POST['mname'];
    $Lastname = $_POST['lname'];
    $Address = $_POST['address'];
    $DateOfBirth = $_POST['DOB'];
    $PlaceOfBirth = $_POST['POB'];
    $Gender = $_POST['Gender'];
    $Guardian = $_POST['Guardian'];
    $ConNum = $_POST['ContactNumber'];
    $CivStat = $_POST['CivilStatus'];
    $Yrlvl = $_POST['YearLevel'];
    $Course = $_POST['Course'];
    $SchlYr = $_POST['SchoolYear'];
    
    $requiredFields = array($Firstname,
    $Middlename,
    $Lastname,
    $Address,
    $DateOfBirth,
    $PlaceOfBirth,
    $Gender,
    $Guardian,
    $ConNum,
    $CivStat,
    $Yrlvl,
    $Course,
    $SchlYr
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