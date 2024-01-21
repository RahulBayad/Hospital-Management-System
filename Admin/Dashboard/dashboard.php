<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../sidebar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href="./../../fontawesome-free-6.3.0-web/css/all.css">
    <script src="./../sidebar.js"></script>
</head>

<body>
    <div class="navbar">
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
                        <li style="height: 26px;"><a href="./dashboard.php"><i class="fa-solid fa-house"></i><span>&nbsp;&nbsp;Dashboard</span></li>
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
                                <li><a href="./../Appointment/appointment.php"><span>Schedule Appointment</span></a></li>
                                <li><a href="./../Appointment/edit appointment/manage_appointment.php"><span>Manage Appointments</span></a><i id="upword" style="float:right;position:relative;left:32px;bottom:16px;" class="fa-solid fa-caret-down" onclick="closeBar4()" ></i></li>
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
                        <li><a href="./../../LOGIN/HMS_home.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </div>
        </aside>
        <?php
            $conn = mysqli_connect("localhost","root","","hms");
            $query = "SELECT * FROM register_outpatient";
            $data = mysqli_query($conn,$query);    
            $outpatients = mysqli_num_rows($data);
            $query1 = "SELECT * FROM register_doctor";
            $data1 = mysqli_query($conn,$query1);    
            $doctors1 = mysqli_num_rows($data1);
            $query2 = "SELECT * FROM inpatients";
            $data2 = mysqli_query($conn,$query2);    
            $inpatients = mysqli_num_rows($data2);
            
        ?>
        <div class="right">
            <div class="categories">
                <div class="box" >
                    <!-- <a href="./add_doctor.html">21525</a> -->
                    <i id="icon-doctor" class="fa-solid fa-user-doctor"></i>
                    <a href="./manage_doctor.php"><h2> Doctors</h2></a>
                    <h3><?php echo $doctors1; ?></h3>
                </div>
                <div class="box">
                    <i id="icon-inpatient" class="fa-solid fa-bed-pulse"></i>
                    <a href="./manage_patients.html"><h2>Inpatients</h2></a>
                    <h3><?php echo $inpatients; ?></h3>
                </div>
                <div class="box">
                    <i id="icon-outpatient" class="fa-solid fa-head-side-mask"></i>
                    <a href="./outpatient.php"><h2>Outatients</h2></a>
                    <h3><?php echo $outpatients; ?></h3>
                </div>
                <div class="box">
                    <span id="icon-beds" class="material-symbols-sharp">bed</span>
                    <a href="./beds.html"><h2>Beds</h2></a>
                    <h3>80</h3>
                </div>
            </div>
            <br>
            <div class="table">
                <table id="outpatient" border="0px">
                    <tr id="table_head">
                        <td width="10%">Patient Id</td>
                        <td width="14%">Patient Name</td>
                        <td width="10%">Gender</td>
                        <td width="14%">Phone</td>
                        <td width="16%">Consultant</td>
                        <td width="7%">Blood Group</td>
                        <td width="15%">Date</td>
                        <td width="">Options</td>
                    </tr>
                </table>
                <div class="overflow-adjust">
                <table id="data" border="0px">
            <?php
                $query3 = "SELECT * FROM inpatients";
                $run = mysqli_query($conn,$query3);
                while($row = mysqli_fetch_assoc($run)){
            ?>
                    <tr>
                        <td width="10%"><?php echo $row['p_id']?></td>
                        <td width="14%"><?php echo $row['i_fname']." ".$row['i_lname'] ?></td>
                        <td width="10%"><?php echo $row['i_gender']?></td>
                        <td width="14%"><?php echo $row['i_phone']?></td>
                        <td width="16%"><?php echo $row['d_name']?></td>
                        <td width="07%"><?php echo $row['i_blood']?></td>
                        <td width="15%"><?php echo $row['admit_date']?></td>
                        <td width="" id="options"><a ><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                    <?php } ?>
                </table></div>
            </div>
        </div>
    </div>
    <script src="./sidebar.js"></script>
</body>

</html>