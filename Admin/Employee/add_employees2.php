<?php
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $marital = $_POST['marital_Status'];
    $nationality = $_POST['nationality'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['house_no']." ,".$_POST['society_name']." ,".$_POST['area']." ";
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $role = $_POST['role'];
    $qualification = $_POST['qualification'];
    $inst_name = $_POST['inst_name'];
    $inst_address = $_POST['inst_address'];
    $shift = $_POST['shift'];
    $salary = $_POST['salary'];
    $account_name = $_POST['account_name'];
    $bank_name = $_POST['bank_name'];
    $branch = $_POST['branch'];
    $acc_no = $_POST['acc_no'];
    $ifsc_code = $_POST['ifsc_code'];

    $connect = mysqli_connect("localhost", "root", "", "hms");
    $query = "INSERT INTO employees(e_fname, e_mname, e_lname, e_dob, e_gender, e_marital_status, e_nationality, e_phone, e_email, e_state, e_city, e_pincode, e_address, e_role, e_qualification, inst_name, inst_address, shift, e_salary, e_account_name, e_bank, e_branch, e_account_no, e_ifsc) 
    VALUES ('$fname', '$mname', '$lname', '$dob','$gender','$marital','$nationality', '$phone','$email','$state','$city','$pincode','$address','$role','$qualification','$inst_name', '$inst_address','$shift','$salary','$account_name','$bank_name','$branch','$acc_no','$ifsc_code')";
    $run = mysqli_query($connect,$query);
    header("Location: http://localhost/hms/Admin/add_employees.php")
    
?>