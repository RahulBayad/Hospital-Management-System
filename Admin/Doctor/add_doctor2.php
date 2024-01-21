<?php

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$married = $_POST['married'];
$nationality = $_POST['nationality'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$address = $_POST['house_no']." ,".$_POST['society_name']." ,".$_POST['area']." ";
$specialization = $_POST['special'];
$degree = $_POST['degree'];
$institute = $_POST['institute'];
$institute_address = $_POST['institute_address'];
$timing = $_POST['timing']." - ".$_POST['2timing'];
$salary = $_POST['salary'];
$day_offs = $_POST['day_offs'];
$acc_name = $_POST['acc_name'];
$bank = $_POST['bank'];
$branch = $_POST['branch'];
$acc_no = $_POST['acc_no'];
$ifsc = $_POST['ifsc'];

// echo $address." ".$timing;  

$connect = mysqli_connect("localhost", "root", "", "hms");
$query = "INSERT INTO register_doctor(d_id, d_fname,d_mname,d_lname, d_dob, d_gender, d_married, d_nationality, d_phone,d_email,d_state,d_city,d_pincode,d_address,specialization,institute,institute_address,timing,salary,day_offs,name_account,bank_name,branch,account_no,ifsc_code) 
          VALUES('','$fname','$mname','$lname','$dob','$gender','$married','$nationality','$phone','$email','$state','$city','$pincode','$address','$specialization','$institute','$institute_address','$timing','$salary','$day_offs','$acc_name','$bank','$branch','$acc_no','$ifsc')";

$runQuery = mysqli_query($connect,$query);

if(isset($runQuery)){
    header("Location: http://localhost/hms/Admin/manage_doctor.php");
}else{
    die("Something Went Wrong!!!!");
}



?>