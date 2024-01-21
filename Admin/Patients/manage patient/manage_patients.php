<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./../../sidebar.js"></script>
    <link rel="stylesheet" href="./../../../fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="./../../sidebar.css">
    <link rel="stylesheet" href="./manage_patient.css">
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
                        <li style="height: 26px;"><a href="./../../Dashboard/dashboard.php"><i class="fa-solid fa-house"></i><span>&nbsp;&nbsp;Dashboard</span></li>
                        <li><a href="#" onclick="openBar1()"><i class="fa-solid fa-user-doctor"></i><span>&nbsp;&nbsp;&nbsp;Doctor</span></a>
                            <i id="downword1" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar1()"></i>
                            <ul class="down_list" id="down1">
                                <li><a href="./../../Doctor/add_doctor.php"><span>Add Doctor</span></a></li>
                                <li><a href="./../../Doctor/Manage doctor/manage_doctor.php"><span>Manage Doctor</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar1()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar2()"><i class="fa-regular fa-user"></i><span>&nbsp;&nbsp;&nbsp;Employee</span></a>
                            <i id="downword2" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar2()"></i>
                            <ul class="down_list" id="down2">
                                <li><a href="./../../Employee/add_employees.php"><span>Add Employee</span></a></li>
                                <li><a href="./../../Employee/Manage employees/manage_employees.php"><span>Manage Employee</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar2()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar3()"><i class="fa-solid fa-bed-pulse"></i><span>&nbsp;&nbsp;Patient</span></a>
                            <i id="downword3" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar3()"></i>
                            <ul class="down_list" id="down3">
                                <!-- <li><a href=""><span>Add Patient</span></a></li> -->
                                <li><a href="./../inpatient/inpatient.php"><span>Inpatient</span></a></li>
                                <li><a href="./../outpatient/outpatient.php"><span>Outpatient</span></a> 
                                <li><a href="./manage_patients.php"><span>Patient Analysis</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar3()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar4()"><i class="fa-regular fa-calendar-check"></i><span>&nbsp;&nbsp;&nbsp;Appointment</span></a>
                            <i id="downword4" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar4()"></i>
                            <ul class="down_list" id="down4">
                                <!-- <li><a href="./appointment.php"><span>xcbhdfhfkdksbbbfskbvsvxxbb</span></a></li> -->
                                <li><a href="./../../Appointment/appointment.php"><span>Schedule Appointment</span></a></li>
                                <li><a href="./../../Appointment/edit appointment/manage_appointment.php"><span>Manage Appointments</span></a><i id="upword" style="float:right;position:relative;left:32px;bottom:16px;" class="fa-solid fa-caret-down" onclick="closeBar4()" ></i></li>
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
                        <li><a href="./../../../LOGIN/HMS_home.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </div>
        </aside>
        <div class="right" id="right">

            <div class="manage-patients" id="manage-patients">
                <h1>Patients Analysis</h1><br>
                <br>
                <form action="" method="post">
                <div class="row1">
                    <div class="input">
                        <label for="patient-type">Patient Type :</label>
                        <select name="patientType" id="patient-type">
                            <option value="Inpatient">Inpatient</option>
                            <option value="Outpatient">Outpatient</option>
                        </select>
                    </div>
                    
                    <div class="input">
                        <label for="doctor">Doctor :</label>
                        <select name="doctor" id="doctor">
                            <option value="All">All</option>
                            <option value="Akhilesh Tomar">Dr Akhilesh Tomar</option>
                            <option value="Neha Sharma">Dr Neha Sharma</option>
                            <option value="Rajat Pawar">Dr Rajat Pawar</option>
                            <option value="Dev Roy">Dr Dev Roy</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="disease">Disease :</label>
                        <input type="text" name="disease" id="disease">
                    </div>
                    <div class="input">
                        <label for="gender">Gender :</label>
                        <select name="gender" id="gender">
                            <option value="All">All</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div><br>
                <div class="row2">
                    <div class="input">
                        <label for="fromdate">From Date :</label>
                        <input type="date" name="date" id="fromdate">
                    </div>
                    <div class="input">
                        <label for="to-date">To Date :</label>
                        <input type="date" name="toDate" id="to-date">
                    </div>
                    <div class="input">
                        <label for="consultation-type">Consultation Type :</label>
                        <select name="consultationType" id="consultation-type">
                            <option value="All">All</option>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>
                    </div>
                                      
                    <div class="input">
                        <label for="payment-status">Payment Status :</label>
                        <select name="payment" id="">
                            <option value="All">All</option>
                            <option value="Pending">Pending</option>
                            <option value="Canceled">Paid</option>
                        </select>
                    </div>  
                </div><br>
                <div class="row3">
                    
                    <div class="input"><input type="submit" value="Search"></div>
                </div>
                </form><br><br>
                <!-- <p class="patient-count" id="patient-count"><span>1000 results</span></p> -->
                
                <div class="patient_details" id="patient_details">
                    <table id="table-titles" border="0px">
                        <tbody>
                            <tr>
                                <td width="4%">No.</td>
                                <td width="7%">Patient Id</td>
                                <td width="11%">Patient Type</td>
                                <td width="11%">Patient Name</td>
                                <td width="8%">Gender</td>
                                <td width="14%">Mobile</td>
                                <td width="12%">Doctor</td>
                                <td width="10%">Date</td>
                                <td width="15%">Disease</td>
                                <td width="9%">Action</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="fixing">
                        <table class="patient-details" id="patient-details" border="0px">
                            <tbody>
                                <?php
                                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        $sql = "SELECT * FROM ";
                                        $patientType = $_POST['patientType'];
                                        $doctor = $_POST['doctor'];
                                        $disease = $_POST['disease'];
                                        $gender = $_POST['gender'];
                                        $startdate = $_POST['date'];
                                        $endDate = $_POST['toDate'];
                                        $consultationType = $_POST['consultationType'];
                                        $paymentStatus = $_POST['payment'];
                                        
                                        if($patientType == "Inpatient") {
                                            $sql = $sql." inpatients WHERE 1=1 ";

                                            if($doctor != "All"){
                                                $sql = $sql." AND d_name='$doctor' ";
                                            }
                                            if($disease != ''){
                                                $sql .= " AND reason='$disease'";
                                            }
                                            if($gender != 'All'){
                                                $sql .= " AND i_gender='$gender'";
                                            }
                                            if($startdate != '' && $endDate != ''){
                                                $sql .= " AND (admit_date BETWEEN '$startdate' AND '$endDate')";
                                            }
                                            if($startdate != '' && $endDate == ''){
                                                $sql .= " AND (admit_date > $startdate ) ";
                                            }
                                            if($startdate == '' && $endDate != ''){
                                                $sql .= " AND (admit_date <     $endDate) ";
                                            }                                      
                                            // echo $sql;
                                            $conn = mysqli_connect("localhost","root","","hms");
                                            $runQuery = mysqli_query($conn,$sql);

                                            $no = 1;                            
                                            while($row = mysqli_fetch_assoc($runQuery)){
                                           
                                            ?>
                                            <tr>
                                                <td width="4%"><?php echo $no; ?></td>
                                                <td width="7%"><?php echo $row['p_id']; ?></td>
                                                <td width="11%">Inpatient</td>
                                                <td width="11%"><?php echo $row['i_fname']." ".$row['i_lname']; ?></td>
                                                <td width="8%"><?php echo $row['i_gender']; ?></td>
                                                <td width="14%"><?php echo $row['i_phone']; ?></td>
                                                <td width="12%"><?php echo $row['d_name']; ?></td>
                                                <td width="10%"><?php echo $row['admit_date']; ?></td>
                                                <td width="15%"><?php echo $row['reason']; ?></td>
                                                <td width="9%"><i id="edit" class="fa-regular fa-pen-to-square"></i></td>
                                            </tr>
                                            <?php 
                                                $no++;
                                        } 
                                        }else{
                                                    $sql = $sql." appointment WHERE (patient_status='Pending' OR patient_status='visited')";
                                                    if($doctor != "All"){
                                                        $sql = $sql." AND doctor='$doctor' ";
                                                    }
                                                    if($disease != ''){
                                                        $sql .= " AND add_message='$disease'";
                                                    }
                                                    if($gender != 'All'){
                                                        $sql .= " AND gender='$gender'";
                                                    }
                                                    if($startdate != '' && $endDate != ''){
                                                        $sql .= " AND (app_date BETWEEN '$startdate' AND '$endDate')";
                                                    }
                                                    if($startdate != '' && $endDate == ''){
                                                        $sql .= " AND app_date > $startdate";
                                                    }
                                                    if($startdate == '' && $endDate != ''){
                                                        $sql .= " AND app_date < $endDate";
                                                    }
                                                    if($consultationType != 'All'){
                                                        $sql .= " AND mode='$consultationType'";
                                                    }   
                                                    
                                                    $conn = mysqli_connect("localhost","root","","hms");
                                                    $runQuery = mysqli_query($conn,$sql);
                                                    $no = 1;                            
                                                    while($row = mysqli_fetch_assoc($runQuery)){
                                                    ?>
                                                    <tr>
                                                        <td width="4%"><?php echo $no; ?></td>
                                                        <td width="7%"><?php echo $row['patient_id']; ?></td>
                                                        <td width="11%">Outpatient</td>
                                                        <td width="11%"><?php echo $row['fname']." ".$row['lname']; ?></td>
                                                        <td width="8%"><?php echo $row['gender']; ?></td>
                                                        <td width="14%"><?php echo $row['phone']; ?></td>
                                                        <td width="12%"><?php echo $row['doctor']; ?></td>
                                                        <td width="10%"><?php echo $row['app_date']; ?></td>
                                                        <td width="15%"><?php echo $row['add_message']; ?></td>
                                                        <td width="9%"><i id="edit" class="fa-regular fa-pen-to-square"></i></td>
                                                    </tr>
                                                    <?php 
                                                        $no = $no + 1;
                                            
                                            } } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
        </div>
        
    </div>
    <!-- <script src="./manage_appointment.js"></script> -->
</body>

</html>