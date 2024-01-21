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
    <link rel="stylesheet" href="./outpatient.css">
    <link rel="stylesheet" href="./../../../fontawesome-free-6.3.0-web/css/all.css">
    <script src="./outpatient.js"></script>
</head>

<body id="body1">
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
                                <li><a href="./outpatient.php"><span>Outpatient</span></a> 
                                <li><a href="./../manage patient/manage_patients.php"><span>Patient Analysis</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar3()" ></i></li>
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
        <div class="right" id="right1">
            <div class="manage_outpatient">
                <div class="heading">
                    <h1>Out-patient</h1>
                </div><br><br><br>
                <div class="containt">
                        <button id="add_outpatient" type="submit" onclick="open_opd()">Add Patient
                            &nbsp; <i style="margin-top: 3px;" class="fa-solid fa-circle-plus"></i></button>
                    
                            <form method="post">
                            <span id="search_patient"><label for="search">Search : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="search" name="search" id="search" placeholder=""><button name="submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </span>   
                        </form>
                    <br><br><br>
                    <table id="outpatient_head" border="0px"> 
                        
                        <tr id="table_head">
                            <td width="14%">Patient Id</td>
                            <td width="14%">Patient Name</td>
                            <td width="10%">Gender</td>
                                <td width="18%">Phone</td>
                                <td width="16%">Date of Birth</td>
                                <td width="7%">Blood Group</td>
                                <td width="">Options</td>
                            </tr>
                        </table>
                        
                        <div class="table">
                        <table id="outpatient" border="0px">
                        <?php
                            $connect = mysqli_connect("localhost", "root","", "hms");
                            $query = "SELECT * FROM inpatients ORDER BY sr_no DESC LIMIT 5";
                            $runQuery = mysqli_query($connect,$query);
                            $query1 = "SELECT * FROM register_outpatient ORDER BY opd_id DESC";
                            if(isset($_POST['submit'])){
                                $search = $_POST['search'];
                                $query1 = "SELECT * FROM register_outpatient WHERE opd_id='$search' OR o_fname='$search' OR o_phone='$search' OR o_email='$search' ";
                                if($search == ''){
                                    $query1 = "SELECT * FROM register_outpatient ORDER BY opd_id DESC";
                                } 
                            }
                            $runQuery = mysqli_query($connect,$query1);     
                            if(mysqli_num_rows($runQuery)>0){
                                while($print = mysqli_fetch_assoc($runQuery)){
                        ?>
                        <tr>
                           
                            <td width="14%"><?php echo $print['opd_id']; ?></td>
                            <td width="14%"><?php echo $print['o_fname']." ".$print['o_lname']; ?></td>
                            <td width="10%"><?php echo $print['o_gender']; ?></td>
                            <td width="18%"><?php echo $print['o_phone']; ?></td>
                            <td width="16%"><?php echo $print['o_dob']; ?></td>
                            <td width="7%"><?php echo $print['o_blood']; ?></td>
                            <td width="%" id="options"><a style="color:black;" href="./outpatient_edit.php?id=<?php echo $print['opd_id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    ><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        <?php }
                       
                        ?>
                    </table>
                    <?php } ?>
                    </div>
                    <br> 
                    
                </div> 
            </div><br>
        </div>
        <div class="opd" id="opd">
            <i id="cancel-btn" class="fa-solid fa-xmark" onclick="close_opd()"></i>
            <h2>Outpatient Registration</h2>
            <br><br><br>
            <form action="http://localhost/hms/Admin/outpatient2.php" method="post">
            <table id="opd_register" class="opd_register" border="0px">
                <tbody>
                    <tr>
                        <td width="" class="name1">
                            <span class="input">
                                <input class="textbox" id="name" name="fname"  type="text" placeholder=" ">
                                <span class="formlabel">First Name</span>
                            </span>
                            <span class="input">
                                <input class="textbox" id="name" name="mname" type="text" placeholder=" ">
                                <span class="formlabel">Middle Name</span>
                            </span>
                            <span class="input">
                                <input class="textbox" id="name" name="lname" type="text" placeholder=" ">
                                <span class="formlabel">Last Name</span>
                            </span>
                        </td>
                        <td width="">

                            <?php 
                                $connect = mysqli_connect("localhost","root","","hms");
                                $sql = "SELECT opd_id FROM register_outpatient ORDER BY opd_id DESC LIMIT 1";
                                $data = mysqli_query($connect,$sql);
                                // if(mysqli_num_rows($data) > 0){
                                    $row = mysqli_fetch_assoc($data);
                                    $last_opd_id = $row['opd_id'] +1;
                                // } 
                            ?>
                            
                            <div class="input">
                                <input type="text" class="textbox" name="p_id" id="patient_id" placeholder=" " value="<?php echo $last_opd_id; ?>" disabled style="cursor:not-allowed">
                                <span class="formlabel">Patient id</span>
                            </div>
                        </td>
                    </tr>
                    <tr><td></td><td></td></tr>
                    <tr>
                        <td>
                            <div class="date">
                                <span>Date of Birth * :&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="date" name="dob" id="dob" placeholder=" ">
                            </div>
                        </td>
                        <td>
                            <div class="input">
                                <input class="textbox" type="text" placeholder=" " name="age" id="age">
                                <span class="formlabel">Age *</span> 
                            </div>
                        </td>
                    </tr>
                    <tr><td></td><td></td></tr>
                    <tr>
                        <td>
                            <div class="input">
                                <select class="select_list"  name="blood_group" id="blood_group">
                                    <option value="bloods" selected disabled >Blood Group</option>
                                    <option value="A+" selected>A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </td>
                        <td><label for="gender" >&nbsp;Gender<span> * </span> : &nbsp;</label> 
                            <input type="radio"  name="gender" value="Male" >&nbsp;
                            <label for="Male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" value="Female">&nbsp;
                            <label for="Female">Female</label>&nbsp;&nbsp;
                            <input type="radio" name="gender" value="Other">&nbsp;
                            <label for="Other">Other</label>&nbsp;&nbsp;
                        </td>
                    </tr>
                    <tr><td></td><td></td></tr>
                    <tr>
                        <td>
                            <div class="input">
                                <input class="textbox" type="text" name="phone" placeholder=" " id="mobile_no"  >
                                <span class="formlabel">Mobile No. *</span> 
                            </div>
                        </td>
                        <td>
                            <div class="input">
                                <input class="textbox" type="email" name="email" placeholder=" " id="email">
                                <span class="formlabel">Email</span> 
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table><br><br><br>
            <div class="btns">
                <input type="submit" value="Submit">&nbsp;
            </div>
        </form>
        </div>
        <br>
    </div>
    <script src="./../../sidebar.js"></script>
    
</body>

</html>