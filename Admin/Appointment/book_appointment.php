<?php
    $id = $_POST['id'];
    $connect = mysqli_connect("localhost","root","","hms");
    $query = "SELECT * FROM register_outpatient WHERE opd_id='$id'";
    $runQuery = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($runQuery);
    $fname = $row['o_fname'];
    $mname = $row['o_mname'];
    $lname = $row['o_lname'];
    $gender = $row['o_gender'];
    $dob = $row['o_dob'];
    $phone = $row['o_phone'];
    $department = $_POST['department'];
    $doctor = $_POST['doctor'];
    $fees = $_POST['fees'];
    $app_date = $_POST['date'];
    $slots = $_POST['slots'];
    $mode = $_POST['mode'];
    $payment_type = $_POST['payment_type'];
    $status = $_POST['status'];
    $note = $_POST['note'];
    $live = $_POST['live'];
    $query1 = "INSERT INTO appointment(sr_no,patient_id,fname,mname,lname,gender,dob,department,doctor,fees,app_date,slot,mode,payment_method,patient_status,add_message,live_consultation,phone) 
    VALUES('','$id','$fname','$mname','$lname','$gender','$dob','$department', '$doctor', '$fees', '$app_date','$slots','$mode','$payment_type','$status','$note','$live','$phone')";
    $runQuery1 = mysqli_query($conn,$query1);
    header("Location: http://localhost/hms/Admin/appointment.php");
?>