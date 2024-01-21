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
    <link rel="stylesheet" href="./inpatient.css">
    <link rel="stylesheet" href="./../../../fontawesome-free-6.3.0-web/css/all.css">
    <script src="./inpatient.js"></script>
    <script src="./../../sidebar.js"></script>
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
                                <li><a href="./inpatient.php"><span>Inpatient</span></a></li>
                                <li><a href="./../outpatient/outpatient.php"><span>Outpatient</span></a> 
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
        <div class="right" id="right">
                
            <div class="manage_inpatient">
                <div class="heading">
                    <h1>In-patient</h1>
                </div><br><br><br>
                <div class="containt">
                        
                        <button id="add_inpatient" type="submit" onclick="openForm1()">Add In-Patient
                            &nbsp; <i style="margin-top: 3px;" class="fa-solid fa-circle-plus"></i></button>
                        
                        <form method="post">
                            <span id="search_patient"><label for="search">Search : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="search" name="search" id="search" placeholder=""><button name="submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </span>   
                        </form>

                    <br><br><br><br>
                    <table id="inpatient" border="0px">
                        <tr id="table_head">
                            <td width="8%">Patient Id</td>
                            <td width="11%">Patient Name</td>
                            <td width="14%">Email</td>
                            <td width="13%">Phone</td>
                            <td width="10%">Consultant</td>
                            <td width="8%">Blood Group</td>
                            <td width="13%">Status</td>
                            <td width="14%">Ward</td>
                            <td width="">Options</td>
                        </tr>
                        <?php
                            $connect = mysqli_connect("localhost", "root","", "hms");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM inpatients WHERE p_id={$id}";
                            $runQuery = mysqli_query($connect,$query);
                            $data1 = mysqli_fetch_assoc($runQuery);
                        ?>
                        <tr>
                            <td><?php echo $data1['p_id']; ?></td>
                            <td><?php echo $data1['i_fname']." ".$data1['i_lname']; ?></td>
                            <td><?php echo $data1['i_email']; ?></td>
                            <td><?php echo $data1['i_phone']; ?></td>
                            <td><?php echo $data1['d_name']; ?></td>
                            <td><?php echo $data1['i_blood']; ?></td>
                            <td><?php echo $data1['status']; ?></td>
                            <td><?php echo $data1['ward']; ?></td>
                            <td id="options"><a><i  class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;<a
                                    ><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                    
                    </table>
                    <br> 
                    
                </div> 
            </div><br><br>
            
        </div>
        
        <div class="admit_inpatient" id="edit" style="transform:scale(100%,100%);">
            <a href="./inpatient.php"><i id="cancel-btn" class="fa-solid fa-xmark" ></i></a>
            <h1>Edit Patient</h1>
            <br>
            <form action="http://localhost/hms/Admin/inpatient_edit.php" method="post">
                <br><br>
                <table border="0px" id="register_table">
                    <tbody>
                        <tr>
                            <td width="57%">
                                <span class="input">
                                    <input class="textbox"  name="fname"  type="text" id="fname" value="<?php echo $data1['i_fname'];?>" placeholder=" " >
                                    <span class="formlabel">First Name</span> 
                                </span>
                                <span class="input">
                                    <input class="textbox" name="mname" type="text" id="mname" value="<?php echo $data1['i_mname'] ?>" placeholder=" " >
                                    <span class="formlabel">Middle Name</span> 
                                </span>
                                <span class="input">
                                    <input class="textbox" name="lname" type="text" id="lname" value="<?php echo $data1['i_lname'] ?>" placeholder=" " >
                                    <span class="formlabel">Last Name</span> 
                                </span>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" type="text" name="id"  value="<?php echo $data1['p_id'] ?>"  placeholder=" ">
                                    <span class="formlabel">Patient Id</span> 
                                </div>
                            </td>
                        </tr>
                        
                        <tr><td> </td><td> </td></tr>
                        <tr>
                            <td width="50%">
                                <div class="input">
                                    <span>Date of Birth * : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                                    <input type="date" name="dob" value="<?php echo $data1['i_dob'] ?>" placeholder=" " >
                                </div>
                            </td>
                            <td><label for="gender">&nbsp;Gender<span> * </span> : &nbsp;</label> 
                                <select name="gender" id="">
                                    <option value="<?php echo $data1['i_gender'] ?>"><?php echo $data1['i_gender'] ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <!-- <input class="textbox" type="text" placeholder=" " id="fname">
                                    <span class="formlabel">Mobile No. *</span>  -->
                                    <select  name="blood_group" >
                                        <option value="<?php echo $data1['i_blood'] ?>"><?php echo $data1['i_blood'] ?></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    <!-- <span class="formlabel">Blood Group *</span> -->
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="phone" type="text" placeholder=" " value="<?php echo $data1['i_phone'] ?>">
                                    <span class="formlabel">Mobile No. *</span> 
                                </div>
                            </td>
                            
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="email" type="email" value="<?php echo $data1['i_email'] ?>" placeholder=" " >
                                    <span class="formlabel">Email</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="em_phone" type="text" value="<?php echo $data1['emer_phone'] ?>" placeholder=" " >
                                    <span class="formlabel">Emergency Contact No. *</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="city" type="text" value="<?php echo $data1['i_city'] ?>" placeholder=" " >
                                    <span class="formlabel">city/state *</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <label >Address *</label> 
                                    <textarea name="address"  cols="30" rows="3"><?php echo $data1['i_address'] ?></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td style="height: 80px;"><h3 style="color:rgb(86, 86, 225);">Insurance Infromation</h3></td></tr>
                        <!-- <tr><td></td></tr> -->
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="insu_name" type="text" value="<?php echo $data1['insu_comp'] ?>" placeholder=" " >
                                    <span class="formlabel">Insurance Company</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="insu_id" type="text" value="<?php echo $data1['insu_id'] ?>" placeholder=" " >
                                    <span class="formlabel">Insurance ID</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="holder" type="text" value="<?php echo $data1['holders_name'] ?>" placeholder=" ">
                                    <span class="formlabel">Policy Holder's Name</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td style="height: 80px;"><h3 style="color:rgb(86, 86, 225);">Admit Information</h3></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="allergies" type="text" value="<?php echo $data1['allergies'] ?>" placeholder=" ">
                                    <span class="formlabel">Allergies</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="recent_injury" type="text" value="<?php echo $data1['recent_injury'] ?>" placeholder=" ">
                                    <span class="formlabel">Recent Injury/Disease</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="reason" type="text" value="<?php echo $data1['reason'] ?>" placeholder=" ">
                                    <span class="formlabel">Reason For Admit *</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="d_name" type="text" value="<?php echo $data1['d_name'] ?>" placeholder=" ">
                                    <span class="formlabel">Doctor Name *</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr> 
                            <td>
                                <div class="input">
                                    <select  name="Wards">
                                        <option value="<?php echo $data1['ward'] ?>"><?php echo $data1['ward'] ?></option>
                                        <option value="Emergency ward">Emergency Ward</option>
                                        <option value="Surgical Ward">Surgical Ward</option>
                                        <option value="ICU">Intensive care unit(ICU)</option>
                                        <option value="Maternity Ward">Maternity Ward</option>
                                        <option value="Padiatric Ward">Pediatric Ward</option>
                                        <option value="Psychiatric Ward">Psychiatric Ward</option>
                                        <option value="Rehabilitation Ward">Rehabilitation Ward</option>
                                    </select>
                                    <!-- <span class="formlabel">Blood Group *</span> -->
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="room" type="text" value="<?php echo $data1['room'] ?>" placeholder=" " >
                                    <span class="formlabel">Room and Bed Number</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="date">
                                    <span>Admit Date & time * : </span>
                                    <!-- <input type="datetime" name="admit_date" id="dob"> -->
                                    <input type="date"  name="admit_date" value="<?php echo $data1['admit_date'] ?>" >&nbsp;&nbsp;<input type="time" name="admit_time" value="<?php echo $data1['admit_time'] ?>" id="">
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <select name="status">
                                        <option value="<?php echo $data1['status'] ?>"><?php echo $data1['status'] ?></option>
                                        <option value="Admitted">Admitted</option>
                                        <option value="Discharged">Discharged</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="date">
                                    <span>Discharge Date  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="date" value="<?php echo $data1['discharge_date'] ?>" name="discharge_date">&nbsp;&nbsp;<input type="time" name="discharge_time" value="<?php echo $data1['discharge_time'] ?>" >
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><br><br>
                <div class="btn">

                    <input type="submit" value="Submit">
                </div>
                <br><br>
            </form>
        </div>
        
    </div>
    
     
    </script>
        
</body>

</html>