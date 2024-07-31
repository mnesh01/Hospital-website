<?php
$patientid = $_POST['patientid'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];
$DOB = $_POST['DOB'];
$Gender = $_POST['Gender'];
$county = $_POST['county'];

$conn = new mysqli('localhost','root','','HOSP');
if($conn->connect_error){
    die('Connection Failed  :  '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into Registration(patientid, firstname, middlename, surname, DOB, Gender, county)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt ->bind_param("issssis",$patientid, $firstname, $middlename, $surname, $DOB, $Gender, $county);
    $stmt ->execute();
    echo "Registration was succesful";
    $stmt ->close();
    $conn ->close();

}