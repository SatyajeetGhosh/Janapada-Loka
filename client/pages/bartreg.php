<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "artisians";

$conn = mysqli_connect($host, $user, $password, $dbname);

$name = $_POST['name'];
$phnumber = $_POST['phnumber'];
$altmob = $_POST['altmob'];
$address = $_POST['address'];
$email = $_POST['email'];
$postalcode = $_POST['postalcode'];
$emphno = $_POST['emphno'];
$occupation = $_POST['occupation'];
$experience = $_POST['experience'];
$dob = $_POST['dob'];
$aadhar = $_POST['Aadhar'];
$PAN = $_POST['PAN'];
$bank = $_POST['bank'];
$accno = $_POST['accno'];
$accholder = $_POST['accholder'];
$branch = $_POST['Branch'];
$ifsc = $_POST['IFSC'];
$micr = $_POST['MICR'];

$sql = "INSERT INTO `users`(`Name`,`Mobile`,`Alternate_Mobile`,`Address`,`Email`,`Postal_Code`,`Emergency_Number`,`Occupation`,`Experience`,`Date_of_Birth`,`Aadhar_Number`,`PAN_number`,`Bank_name`,`Account_Number`,`Holder_Name`,`Branch_Name`,`IFSC_Code`,`MICR_code`) 
VALUES ('$name','$phnumber','$altmob','$address','$email','$postalcode','$emphno','$occupation','$experience','$dob','$aadhar','$PAN','$bank','$accno','$accholder','$branch','$ifsc','$micr')";

if (mysqli_query($conn, $sql)) {
    include('one.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





mysqli_close($conn);
?>