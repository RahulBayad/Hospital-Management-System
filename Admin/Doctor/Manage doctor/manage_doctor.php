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
    <link rel="stylesheet" href="./manage_doctor.css">
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
                                <li><a href="./../add_doctor.php"><span>Add Doctor</span></a></li>
                                <li><a href="./manage_doctor.php"><span>Manage Doctor</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar1()" ></i></li>
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
        <div class="right">
        
            <div class="manage_doctor">
                <div class="heading">
                    <h1>Doctors</h1>
                </div><br>
                <div class="containt">
                    <br>
                    <a href="./add_doctor.php" id="add-btn">Add Doctor&nbsp; <i style="margin-top: 3px;" class="fa-solid fa-circle-plus"></i></a>
                    <br><br><br>
                    
                    <form action="" method="post">

                        <select id="doctor_type" name="department">
                            <option value="All">All</option>
                            <option value="Audiologist">Audiologist</option>
                            <option value="Cardiothoracic Surgeon">Cardiothoracic Surgeon</option>
                            <option value="Dentist">Dentist </option>
                            <option value="PCP(Primary Care physician)">PCP(Primary Care physician)</option>
                            <option value="Endocrinologist">Endocrinologist</option>
                            <option value="ENT Specialists">ENT Specialists</option>
                            <option value="Gynecologists">Gynecologists</option>
                            <option value="Neurologists">Neurologists</option>
                            <option value="Oncologists">Oncologists</option>
                            <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
                            <option value="Pediatrician">Pediatrician </option>
                            <option value="Psychiatrists">Psychiatrists</option>
                            <option value="Pulmonologists">Pulmonologists</option>
                            <option value="Radiologist">Radiologist</option>
                            <option value="Veterinarian">Veterinarian </option>
                            <option value="Cardiologist">Cardiologist</option>
                        </select>
                        <span id="search_doctor"><label for="search">Search : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="search" name="search" id="search" placeholder=""><button  name="submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </span>
                    </form>
                    <br><br><br>
                    
                    <table id="table-heading" border="0px">
                        <tr id="table_head">
                            <td width="8%">Id</td>
                            <td width="14%">Name</td>
                            <td width="17%">Email</td>
                            <td width="15%">Phone</td>
                            <td width="13%">Specialization</td>
                            <td width="10%">Options</td>
                        </tr>
                    </table>
                        
                    <div class="doctor-table">
                        <table id="doctors" border="0px">
                        <?php
                                if(isset($_POST['submit'])){
                                    $connect = mysqli_connect("localhost", "root","", "hms");
                                    $department = $_POST['department'];
                                    $id = $_POST['search'];
                                    if($department == 'All' && $id == ''){
                                        $runQuery = mysqli_query($connect,"SELECT * FROM register_doctor");
                                    }elseif($id == '' && $department != ''){
                                        $runQuery = mysqli_query($connect,"SELECT * FROM register_doctor WHERE specialization='$department'");   
                                    }elseif($id != '' && $department !='All'){
                                        $runQuery = mysqli_query($connect,"SELECT * FROM register_doctor WHERE d_id='$id' AND specialization='$department'");
                                    }elseif($id != '' && $department == 'All'){
                                        $runQuery = mysqli_query($connect,"SELECT * FROM register_doctor WHERE d_id='$id' OR d_email='$id'  OR d_phone='$id' OR d_fname='$id'"  );
                                    }
                                    // echo $department;
                                    if(mysqli_num_rows($runQuery)>0){

                                    while($row = mysqli_fetch_assoc($runQuery)){
                        ?>
                            <tr>
                                <td width="8%"><?php echo $row['d_id'] ?></td>
                                <td width="14%"><?php echo "Dr ".$row['d_fname']," ".$row['d_lname']; ?></td>
                                <td width="17%"><?php echo $row['d_email'] ?></td>
                                <td width="15%"><?php echo $row['d_phone'] ?></td>
                                <td width="13%"><?php echo $row['specialization'] ?></td>
                                <td width="10%" id="options"><a href=""><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a href=""><i class="fa-regular fa-trash-can"></i></a></td>
                            </tr>
                            <?php } } }
                            // $off = mysqli_close($connect);
                        
                            ?>
                            
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="./sidebar.js"></script>
    <script src="./notRefresh.js"></script>
</body>
</html>