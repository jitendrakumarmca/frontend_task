<?php
require_once "connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['emailid'];
$mobile = $_POST['mobileno'];
$gender = $_POST['gender_g'];
$state =  $_POST['select_stste'];
$city =  $_POST['select_city'];
$eduction = implode(",",$_POST['select_eduction']);
$hobbies = implode(",",$_POST['hobbies_select']);
$c_objective = $_POST['career_objective'];

// echo $fname;
// echo $lname;
// echo $email;
// echo $mobile;
// echo $gender;
// echo $state;
// echo $city;
// echo $eduction;
// echo $hobbies;
// echo $c_objective;

$sql = "INSERT INTO resume (Firstname,Lastname,Email,Mobile,Gender,State,City,Eduction,Hobbies,CareerObjective) VALUES ('$fname','$lname','$email','$mobile','$gender','$state','$city','$eduction','$hobbies','$c_objective')";

if(mysqli_query($mysqli, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);



//$valueToStoreInDB = implode(",",$_POST['hobbies_select']);
//echo $valueToStoreInDB;

?>