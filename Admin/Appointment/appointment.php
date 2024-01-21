<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./../sidebar.js"></script>
    <link rel="stylesheet" href="./../../fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="./../sidebar.css">
    <link rel="stylesheet" href="./appointment.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" /> 
</head>

<body>
    <div class="navbar" id="navbar">
        <span id="menu" class="material-symbols-sharp" onclick="openNav()">menu</span>
        <img src="./../photos/newlogo.gif" alt="" width="48px">
        <a href="#"><span class="material-symbols-sharp">
            account_circle
        </span></a>
        <span id="text">Admin</span>
    </div>
    <div class="container">
        <aside id="mySidebar">
        <div class="sidebar">
                <p>
                    <span style="float:right;cursor:pointer;color: white;" id="cancel_btn" class="material-symbols-sharp" onclick="closeNav()"  >
                        disabled_by_default
                        </span>
                    </p><br>
    
                    <ul>
                        <li style="height: 26px;"><a href="./../Dashboard/dashboard.php"><i class="fa-solid fa-house"></i><span>&nbsp;&nbsp;Dashboard</span></li>
                        <li><a href="#" onclick="openBar1()"><i class="fa-solid fa-user-doctor"></i><span>&nbsp;&nbsp;&nbsp;Doctor</span></a>
                            <i id="downword1" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar1()"></i>
                            <ul class="down_list" id="down1">
                                <li><a href="./../Doctor/add_doctor.php"><span>Add Doctor</span></a></li>
                                <li><a href="./../Doctor/Manage doctor/manage_doctor.php"><span>Manage Doctor</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar1()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar2()"><i class="fa-regular fa-user"></i><span>&nbsp;&nbsp;&nbsp;Employee</span></a>
                            <i id="downword2" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar2()"></i>
                            <ul class="down_list" id="down2">
                                <li><a href="./../Employee/add_employees.php"><span>Add Employee</span></a></li>
                                <li><a href="./../Employee/Manage employees/manage_employees.php"><span>Manage Employee</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar2()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar3()"><i class="fa-solid fa-bed-pulse"></i><span>&nbsp;&nbsp;Patient</span></a>
                            <i id="downword3" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar3()"></i>
                            <ul class="down_list" id="down3">
                                <!-- <li><a href=""><span>Add Patient</span></a></li> -->
                                <li><a href="./../Patients/inpatient/inpatient.php"><span>Inpatient</span></a></li>
                                <li><a href="./../Patients/outpatient/outpatient.php"><span>Outpatient</span></a> 
                                <li><a href="./../Patients/manage patient/manage_patients.php"><span>Patient Analysis</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar3()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar4()"><i class="fa-regular fa-calendar-check"></i><span>&nbsp;&nbsp;&nbsp;Appointment</span></a>
                            <i id="downword4" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar4()"></i>
                            <ul class="down_list" id="down4">
                                <!-- <li><a href="./appointment.php"><span>xcbhdfhfkdksbbbfskbvsvxxbb</span></a></li> -->
                                <li><a href="./appointment.php"><span>Schedule Appointment</span></a></li>
                                <li><a href="./edit appointment/manage_appointment.php"><span>Manage Appointments</span></a><i id="upword" style="float:right;position:relative;left:32px;bottom:16px;" class="fa-solid fa-caret-down" onclick="closeBar4()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar5()"><i class="fa-solid fa-briefcase"></i><span>&nbsp;&nbsp;&nbsp;Inventory</span></a>
                            <span><i id="downword5" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar5()"></i></span>
                            <ul class="down_list" id="down5"> 
                                <li><a href="">Update Inventory</a></li>
                                <li><a href="">Manage Inventory</a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar5()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar6()"><i class="fa-solid fa-wallet"></i><span>&nbsp;&nbsp;&nbsp;Payment</span></a>
                            <i id="downword6" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar6()"></i>
                            <ul class="down_list" id="down6">
                                <li><a href=""><span>Patient Payment</span></a></li>
                                <li><a href=""><span>Employee Salary</span></a></li>    
                                <li><a href=""><span>Doctor Salary</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar6()" ></i></li>    
                            </ul>
                        </li>
                        <li><a href="./../HMS_home.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </div>
        </aside>
        <div class="right" id="right">

            <div class="appointment-box">   
                <div class="title-and-search">
                    <h1 id="title">Appointment</h1>
                    <form action="" method="post">
                    <span class="search-patient">       
                        <input type="search" name="search_patient" id="search_patient" placeholder="Patient Id">
                        <button type="submit" name="search"><i name="search" class="fa-solid fa-magnifying-glass"></i></button>
                    </span><br>
                    </form>
                </div> <br>
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                        $id = $_POST['search_patient'];
                        $connect = mysqli_connect("localhost","root","","hms");
                        if($id != ''){
                            $query = "SELECT * FROM register_outpatient WHERE opd_id='$id' OR o_phone='$id' OR o_email='$id'";
                        }else{
                            echo "enter id";
                        }
                        $runQuery = mysqli_query($connect,$query);
                        
                        // if(mysqli_num_rows($runQuery) == 1){
                            while($row = mysqli_fetch_assoc($runQuery)){
                        
                ?>
                <br>
                <br>
                <br>
                <div class="patient-info" id="patient-info"><br>
                    <table class="patient-info-table" id="patient-info-table" border="0px">
                        <tbody>
                            <tr>
                                <td width="120px"><label for="">Patient Id</label></td>
                                <td width="20px">:</td>
                                <td width="310px">
                                    <div class="input">
                                         <input type="text" name="patient-id" id="patient-id" value="<?php echo $row['opd_id'];?>" disabled>
                                    </div>
                                </td>
                                <td width="120px"><label for="">Patient Name</label></td>
                                <td width="20px">:</td>
                                <td width="400px">
                                    <div class="input"> 
                                        <input type="text" name="patient-name" id="patient-name" value="<?php echo $row['o_fname']." ".$row['o_lname'];?>" disabled>
                                    </div>
                                </td>
                                <td width="100px"><label for="">Age</label></td>
                                <td width="20px">:</td>
                                <td width="">
                                    <div class="input">
                                        <input type="number" name="patient-age" id="patient-age" value="<?php echo $row['o_age'];?>" disabled>
                                    </div>
                                </td>
                            </tr><tr><td></td></tr>
                            <tr>
                                <td><label for="">Mobile Number</label></td>
                                <td>:</td>
                                <td>
                                    <div class="input">
                                         <input type="text" name="patient-mobile" id="patient-mobile" value="<?php echo $row['o_phone'];?>" disabled>
                                    </div>
                                </td>
                                <td><label for="">Email</label></td>
                                <td>:</td>
                                <td>
                                    <div class="input">
                                        
                                        <input type="email" name="patient-email" id="patient-email" value="<?php echo $row['o_email'];?>" disabled>
                                    </div>
                                </td>
                                <td><label for="">Date of Birth : </label></td>
                                <td>:</td>
                                <td>
                                    <div class="input">
                                        <input style="width:130px;" type="date" name="" id="lastvisit-date" value="<?php echo $row['o_dob'];?>" disabled >
                                        
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> <br><br>
                    <div id="add-btn">
                    <a onclick="open_appointment()" id="new-appointment-btn"><i class="fa-solid fa-plus"></i> New Appointment</a>
                </div>
                <br>
                </div><br><br>
                <div class="appointment_details" id="appointment_details">
                    <table class="appointment-details" id="appointment-details" border="0px">
                        <tbody>
                            <tr>
                                <td width="18%">Patient Id</td>
                                <td width="14%">Patient Name</td>
                                <td width="15%">Gender</td>
                                <td width="12%">Mobile</td>
                                <td width="18%">Date of Birth</td>
                                <td width="12%">Blood Group</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td><?php echo $row['opd_id'];?></td>
                                <td><?php echo $row['o_fname']." ".$row['o_lname'];?></td>
                                <td><?php echo $row['o_gender'];?></td>
                                <td><?php echo $row['o_phone'];?></td>
                                <td><?php echo $row['o_dob'];?></td>
                                <td><?php echo $row['o_blood'];?></td>
                                <td><a onclick="open_editAppointment()"><i id="edit" class="fa-regular fa-pen-to-square"></i></a></td>
                            </tr>
                            
                        </tbody>
                    </table><br><br>
                </div>
            <div class="new-appointment" id="new-appointment">
            <form action="./book_appointment.php" class="appointment-form" id="appointment-form" method="POST">
                <div class="heading1">
                        <input  type="text" placeholder=" " id="patient_name" name="p_name" value="<?php echo $row['o_fname']." ".$row['o_lname'];?>">
                        <i id="cancel-btn" class="fa-solid fa-xmark" onclick="close_appointment()"></i>
                </div><br>
                <input style="display:none;" type="text" name="id" value="<?php echo $row['opd_id']; ?>">
            <div class="row1">
                <div class="input">
                    <label for="department">Department :</label>
                    <select name="department" id="department">
                        <option value="select" disabled>Select department</option>
                        <option value="GENERAL PHYSICIAN & MEDICINE">GENERAL PHYSICIAN & MEDICINE</option>
                        <option value="DIABETOLO & ENDOCRINOLOGY">DIABETOLO & ENDOCRINOLOGY</option>
                        <option value="INTERVENTIONAL CARDIOLOGY">INTERVENTIONAL CARDIOLOGY</option>
                        <option value="GYNAECOLOGY">GYNAECOLOGY</option>
                        <option value="ORTHOPAEDIC & RHEUMATOLOGY">ORTHOPAEDIC & RHEUMATOLOGY</option>
                        <option value="PULMONOLOGY & GP">PULMONOLOGY & GP</option>
                        <option value="NEUROLOGY">NEUROLOGY</option>
                        <option value="GASTROENTEROLOGY">GASTROENTEROLOGY</option>
                        <option value="UROLOGY">UROLOGY</option>
                        <option value="DERMATOLOGY">DERMATOLOGY</option>
                        <option value="ENT">ENT</option>
                        <option value="GENERAL AND LAPROSCOPIC SURGERY">GENERAL AND LAPROSCOPIC SURGERY</option>
                        <option value="PHYSIOTHERAPY">PHYSIOTHERAPY</option>
                        <option value="NEURO PSYCHIATRY">NEURO PSYCHIATRY</option>
                        <option value="PAEDRIATICS">PAEDRIATICS</option>
                        <option value="NEUTRITION & DIET">NEUTRITION & DIET</option>
                        <option value="ONCOLOGY">ONCOLOGY</option>
                        <option value="NEPHROLOGY">NEPHROLOGY</option>
                        <option value="PSYCHIATRIST">PSYCHIATRIST</option>
                    </select>
                </div>
                <div class="input">
                    <label for="doctor">Doctor :</label> 
                    <select name="doctor" id="doctor">
                        <option value="Akhilesh Tomar">Dr Akhilesh Tomar</option>
                        <option value=" Neha Sharma">Dr Neha Sharma</option>
                        <option value="Rajat Pawar">Dr Rajat Pawar</option>
                        <option value="Dev Roy">Dr Dev Roy</option>
                    </select>
                </div>
                <div class="input">
                    <label for="patient_fees">Fees :</label> 
                    <input  type="text" name="fees" placeholder=" " value="200" id="patient_fees">
                </div>
                <div class="input">
                    <label for="patient_appointment_date">Appointment Date</label> 
                    <input type="date" name="date" placeholder=" " id="patient_appointment_date">
                </div>
            </div><br>
            <div class="row2">
                <div class="input">
                    <label for="slots">Slot :</label>
                    <select name="slots" id="slots">
                        <option name="08:00 AM - 09:00 AM" id="8-9">8:00 AM - 9:00 AM</option>
                        <option name="09:00 AM - 10:00 AM" >9:00 AM - 10:00 AM</option>
                        <option name="10:00 AM - 11:00 AM" >10:00 AM - 11:00 AM</option>
                        <option name="11:00 AM - 12:00 PM" >11:00 AM - 12:00 PM</option>
                        <option name="12:00 PM - 13:00 PM" >12:00 PM - 13:00 PM</option>
                        <option name="13:00 PM - 14:00 PM" >13:00 PM - 14:00 PM</option>
                        <option name="14:00 PM - 15:00 PM" >14:00 PM - 15:00 PM</option>
                        <option name="15:00 PM - 16:00 PM" >15:00 PM - 16:00 PM</option>
                        <option name="16:00 PM - 17:00 PM" >16:00 PM - 17:00 PM</option>
                        <option name="17:00 PM - 18:00 PM" >17:00 PM - 18:00 PM</option>
                        <option name="18:00 PM - 19:00 PM" >18:00 PM - 19:00 PM</option>
                        <option name="19:00 PM - 20:00 PM" >19:00 PM - 20:00 PM</option>
                        <option name="20:00 PM - 21:00 PM" >20:00 PM - 21:00 PM</option>
                        <option name="21:00 PM - 22:00 PM" >21:00 PM - 22:00 PM</option>
                        <option name="22:00 PM - 23:00 PM" >22:00 PM - 23:00 PM</option>
                        <option name="23:00 PM - 00:00 AM" >23:00 PM - 00:00 AM</option>
                        <option name="00:00 AM - 01:00 AM" >00:00 AM - 01:00 AM</option>
                        <option name="01:00 AM - 02:00 AM" >01:00 AM - 02:00 AM</option>
                        <option name="02:00 AM - 03:00 AM" >02:00 AM - 03:00 AM</option>
                        <option name="03:00 AM - 04:00 AM" >03:00 AM - 04:00 AM</option>
                        <option name="04:00 AM - 05:00 AM" >04:00 AM - 05:00 AM</option>
                        <option name="05:00 AM - 06:00 AM" >05:00 AM - 06:00 AM</option>
                        <option name="06:00 AM - 07:00 AM" >06:00 AM - 07:00 AM</option>
                        <option name="07:00 AM - 08:00 AM" >07:00 AM - 08:00 AM</option>
                    </select>
                </div>
                <div class="input">
                    <label for="patient_appointment_mode">Mode</label> 
                    <select name="mode" id="patient_appointment_mode">
                        <option value="Offline">Offline</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="input">
                    <label for="payment_date">Payment Mode</label> 
                    <select name="payment_type" id="payment_mode">
                        <option value="Cash">Cash</option>
                        <option value="Credit-card">Credit Card</option>
                        <option value="Debit-card">Debit Card</option>
                        <option value="Upi">UPI</option>
                        <option value="Cheque">Cheque</option>
                    </select>
                </div>
                <div class="input">
                    <label for="patient_appointment_status">Status</label> 
                    <select name="status" id="patient_appointment_status">
                        <option value="Pending">Pending</option>
                        <option value="Canceled">Canceled</option>
                        <option value="Visited">Visited</option>
                    </select>
                </div>
            </div><br>
            <div class="row3">
                <div class="input">
                <label for="note">Message</label>
                <textarea name="note" id="note" cols="77" rows="3"></textarea>
                </div>
                <div class="input">
                <label for="live-consultation">Live Consultation :</label>
                <select name="live" id="live-consultation">
                    <option value="NO">No</option>
                    <option value="YES">Yes</option>
                </select>
                
                </div>
            </div><br>
            <div class="btns">
                <input type="button" value="Save & Print">
                <input type="submit" value="Submit">
            </div><br>
        </form>
        </div>
        
        <div class="edit-appointment" id="edit-appointment">
            <?php
                $id = $row['opd_id'];
                $query2 = "SELECT * FROM appointment WHERE patient_id='$id'";
                $run = mysqli_query($connect,$query2);
                while($row1 = mysqli_fetch_assoc($run)){
            ?>
            <form action="./edit_appointment.php" class="appointment-form" id="appointment-form" method="POST">
                <div class="heading1">
                        <input  type="text" placeholder=" " id="patient_name" name="p_name" value="<?php echo $row['o_fname']." ".$row['o_lname'];?>">
                        <i id="cancel-btn" class="fa-solid fa-xmark" onclick="close_editAppointment()"></i>
                </div><br>
                <input style="display:none;" type="text" name="id" value="<?php echo $row['opd_id']; ?>">
            <div class="row1">
                <div class="input">
                    <label for="department">Department :</label>
                    <select name="department" id="department">
                        <option value="<?php echo $row1['department'];?>"><?php echo $row1['department']; ?></option>
                        <option value="GENERAL PHYSICIAN & MEDICINE">GENERAL PHYSICIAN & MEDICINE</option>
                        <option value="DIABETOLO & ENDOCRINOLOGY">DIABETOLO & ENDOCRINOLOGY</option>
                        <option value="INTERVENTIONAL CARDIOLOGY">INTERVENTIONAL CARDIOLOGY</option>
                        <option value="GYNAECOLOGY">GYNAECOLOGY</option>
                        <option value="ORTHOPAEDIC & RHEUMATOLOGY">ORTHOPAEDIC & RHEUMATOLOGY</option>
                        <option value="PULMONOLOGY & GP">PULMONOLOGY & GP</option>
                        <option value="NEUROLOGY">NEUROLOGY</option>
                        <option value="GASTROENTEROLOGY">GASTROENTEROLOGY</option>
                        <option value="UROLOGY">UROLOGY</option>
                        <option value="DERMATOLOGY">DERMATOLOGY</option>
                        <option value="ENT">ENT</option>
                        <option value="GENERAL AND LAPROSCOPIC SURGERY">GENERAL AND LAPROSCOPIC SURGERY</option>
                        <option value="PHYSIOTHERAPY">PHYSIOTHERAPY</option>
                        <option value="NEURO PSYCHIATRY">NEURO PSYCHIATRY</option>
                        <option value="PAEDRIATICS">PAEDRIATICS</option>
                        <option value="NEUTRITION & DIET">NEUTRITION & DIET</option>
                        <option value="ONCOLOGY">ONCOLOGY</option>
                        <option value="NEPHROLOGY">NEPHROLOGY</option>
                        <option value="PSYCHIATRIST">PSYCHIATRIST</option>
                    </select>
                </div>
                <div class="input">
                    <label for="doctor">Doctor :</label> 
                    <select name="doctor" id="doctor">
                        <option value="<?php echo $row1['doctor']; ?>"><?php echo $row1['doctor']; ?></option>
                        <option value="Akhilesh Tomar">Dr Akhilesh Tomar</option>
                        <option value=" Neha Sharma">Dr Neha Sharma</option>
                        <option value="Rajat Pawar">Dr Rajat Pawar</option>
                        <option value="Dev Roy">Dr Dev Roy</option>
                    </select>
                </div>
                <div class="input">
                    <label for="patient_fees">Fees :</label> 
                    <input  type="text" name="fees" placeholder=" " value="<?php echo $row1['fees']; ?>" id="patient_fees">
                </div>
                <div class="input">
                    <label for="patient_appointment_date">Appointment Date</label> 
                    <input type="date" name="date" placeholder=" " value="<?php echo $row1['app_date']; ?>" id="patient_appointment_date">
                </div>
            </div><br>
            <div class="row2">
                <div class="input">
                    <label for="slots">Slot :</label>
                    <select name="slots" id="slots">
                        <option value="<?php echo $row1['slot']; ?>" id="8-9"><?php echo $row1['slot']; ?></option>
                        <option value="08:00 AM - 09:00 AM" >8:00 AM - 9:00 AM</option>
                        <option value="09:00 AM - 10:00 AM" >9:00 AM - 10:00 AM</option>
                        <option value="10:00 AM - 11:00 AM" >10:00 AM - 11:00 AM</option>
                        <option value="11:00 AM - 12:00 PM" >11:00 AM - 12:00 PM</option>
                        <option value="12:00 PM - 13:00 PM" >12:00 PM - 13:00 PM</option>
                        <option value="13:00 PM - 14:00 PM" >13:00 PM - 14:00 PM</option>
                        <option value="14:00 PM - 15:00 PM" >14:00 PM - 15:00 PM</option>
                        <option value="15:00 PM - 16:00 PM" >15:00 PM - 16:00 PM</option>
                        <option value="16:00 PM - 17:00 PM" >16:00 PM - 17:00 PM</option>
                        <option value="17:00 PM - 18:00 PM" >17:00 PM - 18:00 PM</option>
                        <option value="18:00 PM - 19:00 PM" >18:00 PM - 19:00 PM</option>
                        <option value="19:00 PM - 20:00 PM" >19:00 PM - 20:00 PM</option>
                        <option value="20:00 PM - 21:00 PM" >20:00 PM - 21:00 PM</option>
                        <option value="21:00 PM - 22:00 PM" >21:00 PM - 22:00 PM</option>
                        <option value="22:00 PM - 23:00 PM" >22:00 PM - 23:00 PM</option>
                        <option value="23:00 PM - 00:00 AM" >23:00 PM - 00:00 AM</option>
                        <option value="00:00 AM - 01:00 AM" >00:00 AM - 01:00 AM</option>
                        <option value="01:00 AM - 02:00 AM" >01:00 AM - 02:00 AM</option>
                        <option value="02:00 AM - 03:00 AM" >02:00 AM - 03:00 AM</option>
                        <option value="03:00 AM - 04:00 AM" >03:00 AM - 04:00 AM</option>
                        <option value="04:00 AM - 05:00 AM" >04:00 AM - 05:00 AM</option>
                        <option value="05:00 AM - 06:00 AM" >05:00 AM - 06:00 AM</option>
                        <option value="06:00 AM - 07:00 AM" >06:00 AM - 07:00 AM</option>
                        <option value="07:00 AM - 08:00 AM" >07:00 AM - 08:00 AM</option>
                    </select>
                </div>
                <div class="input">
                    <label for="patient_appointment_mode">Mode</label> 
                    <select name="mode" id="patient_appointment_mode">
                        <option value="<?php echo $row1['mode']; ?>"><?php echo $row1['mode']; ?></option>
                        <option value="Offline">Offline</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="input">
                    <label for="payment_date">Payment Mode</label> 
                    <select name="payment_type" id="payment_mode">
                        <option value="<?php echo $row1['payment_method']; ?>"><?php echo $row1['payment_method']; ?></option>
                        <option value="Cash">Cash</option>
                        <option value="Credit-card">Credit Card</option>
                        <option value="Debit-card">Debit Card</option>
                        <option value="UPI">UPI</option>
                        <option value="Cheque">Cheque</option>
                    </select>
                </div>
                <div class="input">
                    <label for="patient_appointment_status">Status</label> 
                    <select name="status" id="patient_appointment_status">
                        <?php echo $row1['patient_status']; ?>
                        <option value="Pending">Pending</option>
                        <option value="Canceled">Canceled</option>
                        <option value="Visited">Visited</option>
                    </select>
                </div>
            </div><br>
            <div class="row3">
                <div class="input">
                <label for="note">Message</label>
                <textarea name="note" id="note" cols="77" rows="3" value=""><?php echo $row1['add_message']; ?></textarea>
                </div>
                <div class="input">
                <label for="live-consultation">Live Consultation :</label>
                <select name="live" id="live-consultation">
                    <option value="<?php echo $row1['live_consultation']; ?>"><?php echo $row1['live_consultation']; ?></option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
                
                </div>
            </div><br>
            <div class="btns">
                <input type="button" value="Save & Print">
                <input type="submit" value="Submit">
            </div><br>
        </form>
              <?php } ?>      
        </div>
        
        <?php }}else{ ?>
                <div class="patient-info" id="patient-info"><br>
                    <table class="patient-info-table" id="patient-info-table" border="0px">
                        <tbody>
                            <tr>
                                <td width="120px"><label for="">Patient Id</label></td>
                                <td width="20px">:</td>
                                <td width="310px">
                                    <div class="input">
                                         <input type="text" name="patient-id" id="patient-id" value="" disabled>
                                    </div>
                                </td>
                                <td width="120px"><label for="">Patient Name</label></td>
                                <td width="20px">:</td>
                                <td width="400px">
                                    <div class="input"> 
                                        <input type="text" name="patient-name" id="patient-name" value="" disabled>
                                    </div>
                                </td>
                                <td width="100px"><label for="">Age</label></td>
                                <td width="20px">:</td>
                                <td width="">
                                    <div class="input">
                                        <input type="number" name="patient-age" id="patient-age" value="" disabled>
                                    </div>
                                </td>
                            </tr><tr><td></td></tr>
                            <tr>
                                <td><label for="">Mobile Number</label></td>
                                <td>:</td>
                                <td>
                                    <div class="input">
                                         <input type="text" name="patient-mobile" id="patient-mobile" value="" disabled>
                                    </div>
                                </td>
                                <td><label for="">Email</label></td>
                                <td>:</td>
                                <td>
                                    <div class="input">
                                        
                                        <input type="email" name="patient-email" id="patient-email" value="" disabled>
                                    </div>
                                </td>
                                <td><label for="">Last Visit</label></td>
                                <td>:</td>
                                <td>
                                    <div class="input">
                                        <input style="width:130px;" type="date" name="" id="lastvisit-date" value="" disabled >
                                        
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> <br>  
                </div><br><br>
                <br><br>
                <div class="appointment_details" id="appointment_details">
                    <table class="appointment-details" id="appointment-details" border="0px">
                        <tbody>
                            <tr>
                                <td width="18%">Patient Id</td>
                                <td width="14%">Patient Name</td>
                                <td width="15%">Gender</td>
                                <td width="12%">Mobile</td>
                                <td width="18%">Date of Birth</td>
                                <td width="12%">Blood Group</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table><br><br>
                </div>
                <?php }?>   
            </div>
            

        </div>
    
    </div>
             
    <script src="./appointment.js"></script>
</body>

</html>