<?php
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
// Birthday
$month = $_POST["month"];
$day= $_POST["day"];
$year= $_POST["year"];
// Program and student type
$program = $_POST["program"];
$studentType= $_POST["studentType"];
$address = $_POST["address"];
?>
First Name: <strong><?php echo $firstname; ?></strong><br/>
Middle Name: <strong><?php echo $middlename; ?></strong><br/>
Last Name: <strong><?php echo $lastname; ?></strong><br/>
Gender: <strong><?php echo $gender; ?></strong><br/>
Birthday: <strong><?php echo $month . " " . $day . ", ".$year; ?></strong><br/>
Program: <strong><?php echo $program; ?></strong><br/>
Student Type: <strong><?php echo $studentType; ?></strong><br/>
Address: <strong><?php echo $address; ?></strong>
