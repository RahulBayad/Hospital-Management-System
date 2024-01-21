<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../sidebar.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./manage_employees.css">
    <link rel="stylesheet" href="./../../../fontawesome-free-6.3.0-web/css/all.css">
    <script src="./../../sidebar.js"></script>
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
                                <li><a href="./../add_employees.php"><span>Add Employee</span></a></li>
                                <li><a href="./manage_employees.php"><span>Manage Employee</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar2()" ></i></li>
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
                        <li><a href="./../HMS_home.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </div>
        </aside>
        <div class="right">
            <div class="manage_employees">
                <div class="heading">
                    <h1>Employees</h1>
                </div><br>
                <div class="containt">
                    <form action="./add_employees.html">
                        <button id="add_employee" type="submit">Add Employees
                            &nbsp; <i style="margin-top: 3px;" class="fa-solid fa-circle-plus"></i></button>
                    </form>
                    <br>
                    <select id="job_type" title="jobs">
                        <option value="all">All</option>
                        <option value="xray_technician">X-ray technician</option>
                        <option value="pharmacist">Pharmacist</option>
                        <option value="lab_technician">Lab Technician</option>
                        <option value="nurse">Registered nurse</option>
                        <option value="ambulance_driver">Ambulance Driver</option>
                        <option value="worker">Worker</option>
                        <option value="it_specialist">IT specialist</option>
                        <option value="receptionist">Receptionist</option>
                        <option value="hr_manager">Human resources manager</option>
                    </select>
                    <span id="search_employee"><label for="search">Search : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="search" name="search" id="search">
                    </span>
                    <br><br><br>
                    <table id="employees" border="0px">
                        <tr id="table_head">
                            <td width="8%">Employee Id</td>
                            <td width="14%">First Name</td>
                            <td width="20%">Email</td>
                            <td width="15%">Phone</td>
                            <td width="13%">Job Type</td>
                            <td width="10%">Options</td>
                        </tr>

                        <tr>
                            <td>380001</td>
                            <td>Suresh</td>
                            <td>suresh1432@gmail.com</td>
                            <td>+91 9024147324</td>
                            <td>Ambulance Driver</td>
                            <td id="options"><a href=""><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <tr>
                            <td>380002</td>
                            <td>Harshvardhan</td>
                            <td>harshvardhan311@gmail.com</td>
                            <td>+91 8746259613</td>
                            <td>Human resourse manager</td>
                            <td id="options"><a href=""><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <tr>
                            <td>380003</td>
                            <td>Veer</td>
                            <td>veersingh1@gmail.com</td>
                            <td>+91 9365249872</td>
                            <td>IT Specialist</td>
                            <td id="options"><a href=""><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <tr>
                            <td>380004</td>
                            <td>Kejriwal</td>
                            <td>kejriwal5213@gmail.com</td>
                            <td>+91 8152523251</td>
                            <td>Worker</td>
                            <td id="options"><a href=""><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <tr>
                            <td>380005</td>
                            <td>Karishma</td>
                            <td>karishma3952@gmail.com</td>
                            <td>+91 7424993118</td>
                            <td>Nurse</td>
                            <td id="options"><a href=""><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    href=""><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <script src="./sidebar.js"></script>
    
</body>

</html>