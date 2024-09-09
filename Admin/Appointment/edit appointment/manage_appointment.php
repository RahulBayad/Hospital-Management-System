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
    <link rel="stylesheet" href="./manage_appointment.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                                <li><a href="./../../Patients/inpatient/inpatient.php"><span>Inpatient</span></a></li>
                                <li><a href="./../../Patients/outpatient/outpatient.php"><span>Outpatient</span></a> 
                                <li><a href="./../../Patients/manage patient/manage_patients.php"><span>Patient Analysis</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar3()" ></i></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="openBar4()"><i class="fa-regular fa-calendar-check"></i><span>&nbsp;&nbsp;&nbsp;Appointment</span></a>
                            <i id="downword4" style="float:right;position:relative;right:10px;" class="fa-solid fa-caret-down" onclick="openBar4()"></i>
                            <ul class="down_list" id="down4">
                                <!-- <li><a href="./appointment.php"><span>xcbhdfhfkdksbbbfskbvsvxxbb</span></a></li> -->
                                <li><a href="./../appointment.php"><span>Schedule Appointment</span></a></li>
                                <li><a href="./manage_appointment.php"><span>Manage Appointments</span></a><i id="upword" style="float:right;position:relative;left:32px;bottom:16px;" class="fa-solid fa-caret-down" onclick="closeBar4()" ></i></li>
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

            <div class="manage-appointments" id="manage-appointments">
                <h1>Manage Appointments</h1><br>
                <br>
                <form action="" method="post">
                    <div class="row1">
                        <div class="input">
                            <label for="department">Department :</label>
                            <select name="department" id="department">
                                <option value="All">All</option>
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
                            <label for="doctos">Doctor :</label>
                            <select name="doctor" id="doctor">
                                <option value="All">All</option>
                                <option value="Akhilesh Tomar">Dr Akhilesh Tomar</option>
                                <option value="Neha Sharma">Dr Neha Sharma</option>
                                <option value="Rajat Pawar">Dr Rajat Pawar</option>
                                <option value="">Dr Dev Roy</option>
                            </select>   
                        </div>
                        <div class="input">
                            <label for="appointment-date">Date :</label>
                            <input type="date" name="date" id="appointment-date" value="">
                        </div>
                    </div><br>
                    <div class="row2">
                        <div class="input">
                            <label for="slots">Slot :</label>
                            <select name="slot" id="slots">
                                <option value="All">All</option>
                                <option value="08:00 AM - 09:00 AM" >08:00 AM - 09:00 AM</option>
                                <option value="09:00 AM - 10:00 AM" >09:00 AM - 10:00 AM</option>
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
                            <label for="status">Status :</label>
                            <select name="status" id="">
                                <option value="All">All</option>
                                <option value="Pending">Pending</option>
                                <option value="Canceled">Canceled</option>
                                <option value="Visited">Visited</option>
                            </select>
                        </div>
                        <button type="submit">Search</button>

                    </div>

                </form><br><br>
                <div class="appointment_details" id="appointment_details">
                    <table id="table-titles" border="0px">
                        <tbody>
                            <tr>
                                <td width="8%">Patient Id</td>
                                <td width="9%">Patient Name</td>
                                <td width="10%">Gender</td>
                                <td width="11%">Appointment Date</td>
                                <td width="13%">Mobile</td>
                                <td width="10%">Doctor</td>
                                <td width="12%">Department</td>
                                <td width="8%">Fees</td>
                                <td width="8%">Status</td>
                                <td>Action</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="fixing">
                        <table class="appointment-details" id="appointment-details" border="0px">
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM appointment WHERE 1=1";
                                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        
                                        $department = $_POST['department'];
                                        $doctor = $_POST['doctor'];
                                        $date = $_POST['date'];
                                        $slot = $_POST['slot'];
                                        $status = $_POST['status'];

                                        if($department != "All") {
                                            $sql = $sql." AND department='$department'";
                                        }
                                        if($slot != "All") {
                                            $sql .= " AND slot='$slot'";
                                        }
                                        if($doctor != "All") {
                                            $sql .= " AND doctor='$doctor'";
                                        }
                                        if($date != '') {
                                            $sql .= " AND app_date='$date'";
                                        }
                                        if($status != "All") {
                                            $sql .= " AND patient_status    ='$status'";
                                        }                                 
                                    }   
                                    $connect = mysqli_connect("localhost","root","","hms");
                                    $runQuery = mysqli_query($connect,$sql);
                                    while($row = mysqli_fetch_assoc($runQuery)){
                                ?>
                                <tr>
                                    <td width="8%"><?php echo $row['patient_id']; ?></td>
                                    <td width="9%"><?php echo $row['fname']." ".$row['lname']; ?></td>
                                    <td width="10%"><?php echo $row['gender']; ?></td >
                                    <td width="11%"><?php echo $row['app_date']; ?></td >
                                    <td width="13%"><?php echo $row['phone']; ?></td >
                                    <td width="10%"><?php echo $row['doctor']; ?></td >
                                    <td width="12%"><?php echo $row['department']; ?></td >
                                    <td width="8%"><?php echo $row['fees']; ?></td >
                                    <td width="8%"><?php echo $row['patient_status']; ?></td >
                                    <td><i id="edit" class="fa-regular fa-pen-to-square"></i></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </tbody>
                           </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <script src="./manage_appointment.js"></script>
</body>

</html>