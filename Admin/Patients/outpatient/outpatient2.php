<?php

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $blood = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $conn = mysqli_connect("localhost","root","","hms");
    $query = "INSERT INTO register_outpatient(o_fname,o_mname,o_lname,o_dob,o_age,o_blood,o_gender,o_phone,o_email)
                VALUES('$fname','$mname','$lname','$dob','$age','$blood','$gender','$phone','$email')";
    $data = mysqli_query($conn,$query);    
    header("Location: http://localhost/hms/Admin/outpatient.php");

    
?>
