<?php
    $id = $_POST['id'];
    $department = $_POST['department'];
    $doctor = $_POST['doctor'];
    $fees = $_POST['fees'];
    $app_date = $_POST['date'];
    $slot = $_POST['slots'];
    $mode = $_POST['mode'];
    $payment_method = $_POST['payment_type'];
    $patient_status = $_POST['status'];
    $add_message = $_POST['note'];
    $live_consultation = $_POST['live'];
    $connect = mysqli_connect("localhost","root","","hms");
    $query = "UPDATE appointment
              SET department='$department' , doctor='$doctor',fees='$fees',app_date='$app_date',slot='$slot',mode='$mode',payment_method='$payment_method',patient_status='$patient_status',add_message='$add_message',live_consultation='$live_consultation'
              WHERE patient_id='$id'";

    $run = mysqli_query($connect,$query);
    mysqli_close($connect);
    header("Location: http://localhost/hms/Admin/appointment.php");

?>