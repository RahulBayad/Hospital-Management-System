<?php

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood_group'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $em_phone = $_POST['em_phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $insu_comp = $_POST['insu_name'];
    $insu_id = $_POST['insu_id'];
    $holder = $_POST['holder'];
    $allergies = $_POST['allergies'];
    $recent_injury = $_POST['recent_injury'];
    $reason = $_POST['reason'];
    $d_name = $_POST['d_name'];
    $ward = $_POST['Wards'];
    $room = $_POST['room'];
    $admit_date = $_POST['admit_date'];
    $admit_time = $_POST['admit_time'];
    $status = $_POST['status'];
    $discharge = $_POST['discharge_date'];
    $discharge_time = $_POST['discharge_time'];

    $connect = mysqli_connect("localhost", "root", "", "hms");
    $query = "UPDATE inpatients
              SET i_fname='$fname',i_mname='$mname',i_lname='$lname',i_dob='$dob',i_gender='$gender',i_blood='$blood',i_phone='$phone',i_email='$email',emer_phone='$em_phone',i_city='$city',i_address='$address',insu_comp='$insu_comp',insu_id='$insu_id',holders_name='$holder',allergies='$allergies',recent_injury='$recent_injury',reason='$reason',d_name='$d_name',ward='$ward',room='$room',admit_date='$admit_date',admit_time='$admit_time',status='$status', discharge_date='$discharge',discharge_time='$discharge_time'
              WHERE p_id='$id' ";
    $runQuery = mysqli_query($connect,$query);
    
    $off = mysqli_close($connect);
    header("Location: http://localhost/hms/Admin/inpatient.php");
?>
<!-- if($search == ''){
                                    $query1 = "SELECT * FROM inpatients ORDER BY sr_no DESC";
                                }elseif($search != ''){
                                $query1 = "SELECT * FROM inpatients WHERE p_id='$search' OR i_fname='$search' OR i_phone='$search OR i_email='$search'";
                                } -->