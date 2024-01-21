<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../sidebar.css">
    <link rel="stylesheet" href="./add_employees.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
        <script src="./sidebar.js"></script>
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
                                <li><a href="./add_employees.php"><span>Add Employee</span></a></li>
                                <li><a href="./Manage employees/manage_employees.php"><span>Manage Employee</span></a><i id="upword" style="float:right;position:relative;left:32px;" class="fa-solid fa-caret-down" onclick="closeBar2()" ></i></li>
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
        <div class="right">
            <div class="register_form">
                <form action="./add_employees2.php" method="post"  onsubmit="submit1()">
                    <div class="containt1">
                        <h1 style="text-align: center;">Employee Registration </h1><br>
                    <fieldset>
                        <!-- <legend>Doctor Registration</legend> -->
                        <br>
                        <h2>Personal Infromation : </h1><br>
                        <br>
                        <table id="p_info" style="width:100%;padding-left:1.5rem;" border="0px">
                            <tr>
                                <td style="width: 8%;"><label for="fname">First Name<span> * </span>  :</label></td>
                                <td style="width: 18%;"><input type="text" name="fname" id="fname" placeholder="surname"></td>
                                <td style="width: 8%;"><label for="mname">Middle Name<span> * </span>  : </label></td>
                                <td style="width: 18%;"><input type="text" name="mname" id="mname" placeholder=""></td>
                                <td style="width: 8%;"><label for="lname">Last Name<span> * </span>  : </label></td>
                                <td style="width: 20%;"><input type="text" name="lname" id="lname"></td>
                            </tr>
                            
                            <tr><td></td></tr>
                            <tr>
                                <td><label for="dob">Date of Birth<span> * </span>  : &nbsp;</label></td>
                                <td><input type="date" name="dob" id="dob"></td>
                                <td><label for="gender">Gender<span> * </span>  :</label></td>   
                                <td><input type="radio" name="gender" value="Male">&nbsp;
                                    <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="Female">&nbsp;
                                    <label for="female">Female</label>&nbsp;&nbsp;
                                </td>
                                <td><label for="marital_status">Marital Status <span> * </span> :</label></td>
                                <td>
                                    <select name="marital_Status" id="marital_status">
                                        <option value="select" selected disabled>--select--</option>
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td><label for="nationality">Nationality <span> * </span>:</label></td>
                                <td>
                                        <select class="form-control" name="nationality">
                                            <option value="select" selected >--select--</option>
                                            <option value="AFGHAN">AFGHAN</option>
                                            <option value="ALBANIAN">ALBANIAN</option>
                                            <option value="ALGERIAN">ALGERIAN</option>
                                            <option value="AMERICAN">AMERICAN</option>
                                            <option value="ANDORRAN">ANDORRAN</option>
                                            <option value="ANGOLAN">ANGOLAN</option>
                                            <option value="ANTIGUANS">ANTIGUANS</option>
                                            <option value="ARGENTINEAN">ARGENTINEAN</option>
                                            <option value="ARMENIAN">ARMENIAN</option>
                                            <option value="AUSTRALIAN">AUSTRALIAN</option>
                                            <option value="AUSTRIAN">AUSTRIAN</option>
                                            <option value="AZERBAIJANI">AZERBAIJANI</option>
                                            <option value="BAHAMIAN">BAHAMIAN</option>
                                            <option value="BAHRAINI">BAHRAINI</option>
                                            <option value="BANGLADESHI">BANGLADESHI</option>
                                            <option value="BARBADIAN">BARBADIAN</option>
                                            <option value="BARBUDANS">BARBUDANS</option>
                                            <option value="BATSWANA">BATSWANA</option>
                                            <option value="BELARUSIAN">BELARUSIAN</option>
                                            <option value="BELGIAN">BELGIAN</option>
                                            <option value="BELIZEAN">BELIZEAN</option>
                                            <option value="BENINESE">BENINESE</option>
                                            <option value="BHUTANESE">BHUTANESE</option>
                                            <option value="BOLIVIAN">BOLIVIAN</option>
                                            <option value="BOSNIAN">BOSNIAN</option>
                                            <option value="BRAZILIAN">BRAZILIAN</option>
                                            <option value="BRITISH">BRITISH</option>
                                            <option value="BRUNEIAN">BRUNEIAN</option>
                                            <option value="BULGARIAN">BULGARIAN</option>
                                            <option value="BURKINABE">BURKINABE</option>
                                            <option value="BURMESE">BURMESE</option>
                                            <option value="BURUNDIAN">BURUNDIAN</option>
                                            <option value="CAMBODIAN">CAMBODIAN</option>
                                            <option value="CAMEROONIAN">CAMEROONIAN</option>
                                            <option value="CANADIAN">CANADIAN</option>
                                            <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                                            <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                                            <option value="CHADIAN">CHADIAN</option>
                                            <option value="CHILEAN">CHILEAN</option>
                                            <option value="CHINESE">CHINESE</option>
                                            <option value="COLOMBIAN">COLOMBIAN</option>
                                            <option value="COMORAN">COMORAN</option>
                                            <option value="CONGOLESE">CONGOLESE</option>
                                            <option value="COSTA RICAN">COSTA RICAN</option>
                                            <option value="CROATIAN">CROATIAN</option>
                                            <option value="CUBAN">CUBAN</option>
                                            <option value="CYPRIOT">CYPRIOT</option>
                                            <option value="CZECH">CZECH</option>
                                            <option value="DANISH">DANISH</option>
                                            <option value="DJIBOUTI">DJIBOUTI</option>
                                            <option value="DOMINICAN">DOMINICAN</option>
                                            <option value="DUTCH">DUTCH</option>
                                            <option value="EAST TIMORESE">EAST TIMORESE</option>
                                            <option value="ECUADOREAN">ECUADOREAN</option>
                                            <option value="EGYPTIAN">EGYPTIAN</option>
                                            <option value="EMIRIAN">EMIRIAN</option>
                                            <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                                            </option>
                                            <option value="ERITREAN">ERITREAN</option>
                                            <option value="ESTONIAN">ESTONIAN</option>
                                            <option value="ETHIOPIAN">ETHIOPIAN</option>
                                            <option value="FIJIAN">FIJIAN</option>
                                            <option value="FILIPINO">FILIPINO</option>
                                            <option value="FINNISH">FINNISH</option>
                                            <option value="FRENCH">FRENCH</option>
                                            <option value="GABONESE">GABONESE</option>
                                            <option value="GAMBIAN">GAMBIAN</option>
                                            <option value="GEORGIAN">GEORGIAN</option>
                                            <option value="GERMAN">GERMAN</option>
                                            <option value="GHANAIAN">GHANAIAN</option>
                                            <option value="GREEK">GREEK</option>
                                            <option value="GRENADIAN">GRENADIAN</option>
                                            <option value="GUATEMALAN">GUATEMALAN</option>
                                            <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                                            <option value="GUINEAN">GUINEAN</option>
                                            <option value="GUYANESE">GUYANESE</option>
                                            <option value="HAITIAN">HAITIAN</option>
                                            <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                                            <option value="HONDURAN">HONDURAN</option>
                                            <option value="HUNGARIAN">HUNGARIAN</option>
                                            <option value="ICELANDER">ICELANDER</option>
                                            <option value="INDIAN">INDIAN</option>
                                            <option value="INDONESIAN">INDONESIAN</option>
                                            <option value="IRANIAN">IRANIAN</option>
                                            <option value="IRAQI">IRAQI</option>
                                            <option value="IRISH">IRISH</option>
                                            <option value="ISRAESLI">ISRAELI</option>
                                            <option value="ITALIAN">ITALIAN</option>
                                            <option value="IVORIAN">IVORIAN</option>
                                            <option value="JAMAICAN">JAMAICAN</option>
                                            <option value="JAPANESE">JAPANESE</option>
                                            <option value="JORDANIAN">JORDANIAN</option>
                                            <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                                            <option value="KENYAN">KENYAN</option>
                                            <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                                            </option>
                                            <option value="KUWAITI">KUWAITI</option>
                                            <option value="KYRGYZ">KYRGYZ</option>
                                            <option value="LAOTIAN">LAOTIAN</option>
                                            <option value="LATVIAN">LATVIAN</option>
                                            <option value="LEBANESE">LEBANESE</option>
                                            <option value="LIBERIAN">LIBERIAN</option>
                                            <option value="LIBYAN">LIBYAN</option>
                                            <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                                            <option value="LITHUANIAN">LITHUANIAN</option>
                                            <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                                            <option value="MACEDONIAN">MACEDONIAN</option>
                                            <option value="MALAGASY">MALAGASY</option>
                                            <option value="MALAWIAN">MALAWIAN</option>
                                            <option value="MALAYSIAN">MALAYSIAN</option>
                                            <option value="MALDIVAN">MALDIVAN</option>
                                            <option value="MALIAN">MALIAN</option>
                                            <option value="MALTESE">MALTESE</option>
                                            <option value="MARSHALLESE">MARSHALLESE</option>
                                            <option value="MAURITANIAN">MAURITANIAN</option>
                                            <option value="MAURITIAN">MAURITIAN</option>
                                            <option value="MEXICAN">MEXICAN</option>
                                            <option value="MICRONESIAN">MICRONESIAN</option>
                                            <option value="MOLDOVAN">MOLDOVAN</option>
                                            <option value="MONACAN">MONACAN</option>
                                            <option value="MONGOLIAN">MONGOLIAN</option>
                                            <option value="MOROCCAN">MOROCCAN</option>
                                            <option value="MOSOTHO">MOSOTHO</option>
                                            <option value="MOTSWANA">MOTSWANA</option>
                                            <option value="MOZAMBICAN">MOZAMBICAN</option>
                                            <option value="NAMIBIAN">NAMIBIAN</option>
                                            <option value="NAURUAN">NAURUAN</option>
                                            <option value="NEPALESE">NEPALESE</option>
                                            <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                                            <option value="NI-VANUATU">NI-VANUATU</option>
                                            <option value="NICARAGUAN">NICARAGUAN</option>
                                            <option value="NIGERIEN">NIGERIEN</option>
                                            <option value="NORTH KOREAN">NORTH KOREAN</option>
                                            <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                                            <option value="NORWEGIAN">NORWEGIAN</option>
                                            <option value="OMANI">OMANI</option>
                                            <option value="PAKISTANI">PAKISTANI</option>
                                            <option value="PALAUAN">PALAUAN</option>
                                            <option value="PANAMANIAN">PANAMANIAN</option>
                                            <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                                            <option value="PARAGUAYAN">PARAGUAYAN</option>
                                            <option value="PERUVIAN">PERUVIAN</option>
                                            <option value="POLISH">POLISH</option>
                                            <option value="PORTUGUESE">PORTUGUESE</option>
                                            <option value="QATARI">QATARI</option>
                                            <option value="ROMANIAN">ROMANIAN</option>
                                            <option value="RUSSIAN">RUSSIAN</option>
                                            <option value="RWANDAN">RWANDAN</option>
                                            <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                                            <option value="SALVADORAN">SALVADORAN</option>
                                            <option value="SAMOAN">SAMOAN</option>
                                            <option value="SAN MARINESE">SAN MARINESE</option>
                                            <option value="SAO TOMEAN">SAO TOMEAN</option>
                                            <option value="SAUDI">SAUDI</option>
                                            <option value="SCOTTISH">SCOTTISH</option>
                                            <option value="SENEGALESE">SENEGALESE</option>
                                            <option value="SERBIAN">SERBIAN</option>
                                            <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                                            <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                                            <option value="SINGAPOREAN">SINGAPOREAN</option>
                                            <option value="SLOVAKIAN">SLOVAKIAN</option>
                                            <option value="SLOVENIAN">SLOVENIAN</option>
                                            <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                                            <option value="SOMALI">SOMALI</option>
                                            <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                                            <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                                            <option value="SPANISH">SPANISH</option>
                                            <option value="SRI LANKAN">SRI LANKAN</option>
                                            <option value="SUDANESE">SUDANESE</option>
                                            <option value="SURINAMER">SURINAMER</option>
                                            <option value="SWAZI">SWAZI</option>
                                            <option value="SWEDISH">SWEDISH</option>
                                            <option value="SWISS">SWISS</option>
                                            <option value="SYRIAN">SYRIAN</option>
                                            <option value="TAIWANESE">TAIWANESE</option>
                                            <option value="TAJIK">TAJIK</option>
                                            <option value="TANZANIAN">TANZANIAN</option>
                                            <option value="THAI">THAI</option>
                                            <option value="TOGOLESE">TOGOLESE</option>
                                            <option value="TONGAN">TONGAN</option>
                                            <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                                                TOBAGONIAN</option>
                                            <option value="TUNISIAN">TUNISIAN</option>
                                            <option value="TURKISH">TURKISH</option>
                                            <option value="TUVALUAN">TUVALUAN</option>
                                            <option value="UGANDAN">UGANDAN</option>
                                            <option value="UKRAINIAN">UKRAINIAN</option>
                                            <option value="URUGUAYAN">URUGUAYAN</option>
                                            <option value="UZBEKISTANI">Uzbekistani</option>
                                            <option value="VENEZUELAN">VENEZUELAN</option>
                                            <option value="VIETNAMESE">VIETNAMESE</option>
                                            <option value="WELSH">WELSH</option>
                                            <option value="YEMENITE">YEMENITE</option>
                                            <option value="ZAMBIAN">ZAMBIAN</option>
                                            <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                                        </select>
                                </td>
                                <td><label for="contact_no">Contact No <span> * </span> :</label></td>
                                <td><input type="tel" name="phone" id="contact_no"></td>
                                <td><label for="email">Email Address<span> * </span>   :</label></td>   
                                <td><input type="email" name="email" id="email">&nbsp;</td>
                                
                            </tr>
                            <tr><td></td></tr>
                            <!-- <tr>
                                <td><label for="identity">Identity Proof <span> * </span>:</label></td>
                                <td><input type="file" name="identity" id="identity"></td>
                            </tr> -->
                        </table><br><br>
                        <h2>Present Address :</h2><br>
                        <br>
                        <table border="0px" style="width:100%;padding-left:1.5rem;">
                            <tr>
                                <td style="width: 12%;"><label for="house_no">House No.<span> * </span>  :</label></td>
                                <td style="width: 22%;"><input type="text" name="house_no" id="house_no" placeholder=""></td>
                                <td style="width: 11%;"><label for="society_name">Society Name : </label></td>
                                <td style="width: 22%;"><input type="text" name="society_name" id="society_name" placeholder=""></td>
                                <td style="width: 10%;"><label for="area">Area<span> * </span>  : </label></td>
                                <td style="width: 22%;"><input type="text" name="area" id="area"></td>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                                <td><label for="state">State<span> * </span>:</label></td>
                                <td><input type="text" name="state" id="identity"></td>
                                <td><label for="city">City <span> * </span> :</label></td>
                                <td><input type="text" name="city" id="city"></td>
                                <td><label for="pincode">Pincode <span> * </span> :</label></td>
                                <td><input type="number" name="pincode" id="pincode"></td>
                            </tr>
                        </table>
                    <br><br>
                        <h2>Professional Infromation :</h2><br><br>
                        <table border="0px" style="width:100%;padding-left:1.4rem;">
                            <tr>
                                <td style="width: 12%;"><label for="job_role">Job Role<span> *</span> :</label></td>
                                <td style="width: 16%;">
                                    <select name="role" id="job_role">
                                        <option value="select"  selected>--Select--</option>
                                        <option value="X-ray technician">X-ray technician</option>
                                        <option value="pharmaPharmacistcist">Pharmacist</option>
                                        <option value="Lab Technician">Lab Technician</option>
                                        <option value="nursRegistered nursee">Registered nurse</option>
                                        <option value="Registered nurse">Ambulance Driver</option>
                                        <option value="Worker">Worker</option>
                                        <option value="IT specialist">IT specialist</option>
                                        <option value="Receptionist">Receptionist</option>
                                        <option value="Human resources manager">Human resources manager</option>
                                    </select>
                                </td>
                                <td style="width: 14%;"><label for="highest_qualification">Highest Qualification :</label></td>
                                <td style="width: 16%;">
                                    <select name="qualification" id="highest_qualification">
                                        <option value="select" >--select--</option>
                                        <option value="10th Pass">10th Pass</option>
                                        <option value="12th Pass">12th Pass</option>
                                        <option value="Graduate">Graduate</option>
                                        <option value="Post Graduate">Post Graduate</option>
                                    </select>
                                </td>
                                <td style="width: 12%;"><label for="degree_certificate">Degree/Marksheet <span>*</span> : </label></td>
                                <td style="width: 16%;"><input type="file" id="degree_certificate"><p style="font-size: 10px; color: red;">(Jpeg and pdf files only)</p></td>
                            </tr><td></td>
                            <tr></tr>
                            <tr>
                                <!-- <td ><label for="document_no">Document No :</label></td>
                                <td ><input type="text" name="" id="document_no"></td> -->
                                <td><label for="institute_name">Institute Name<span> * </span>:</label></td>
                                <td><textarea name="inst_name" id="institute_name" cols="20" rows="2"></textarea></td>
                                <td><label for="institute_address">Address :</label></td>
                                <td><textarea id="institute_address" name="inst_address" cols="25" rows="3"></textarea></td>
                                <td><label for="job_time">Shift <span> * </span>: </label></td>
                                <td>
                                    <select name="shift" id="job_time">
                                        <option value="select" selected>--Select--</option>
                                        <option value="8:00 AM to 20:00 PM">8:00 AM to 20:00 PM </option>
                                        <option value="20:00 PM to 08:00 AM ">20:00 PM to 08:00 AM </option>
                                    </select>
                                </td>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                                <td><label for="salary">Salary (monthly) <span> * </span> :</label></td>
                                <td><input type="number" name="salary" id="salary"></td>
                                <!-- <td><label for="day_offs">Preffered Day off <span> * </span>:</label> </td>
                                <td><input type="text" name="" id="day_offs"></td> -->
                            </tr>
                        </table>
                        <br><br>
                        <h2>Bank Account Details : </h2><br><br>
                        <table border="0px" style="width:100%;padding-left:1.4rem;">
                            <tr>
                                <td style="width: 12%;"><label for="name_inbank">Name<span> * </span>  :</label></td>
                                <td style="width: 22%;"><input type="text" name="account_name" id="account_name" placeholder="Name as per bank account"></td>
                                <td style="width: 11%;"><label for="bank_name">Bank Name <span> * </span>: </label></td>
                                <td style="width: 22%;"><input type="text" name="bank_name" id="bank_name" placeholder=""></td>
                                <td style="width: 10%;"><label for="branch">Branch<span> * </span>  : </label></td>
                                <td style="width: 22%;"><input type="text" name="branch" id="branch"></td>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                                <td><label for="account_number">Account Number<span> * </span> :</label></td>
                                <td><input type="number" name="acc_no" id="account_number"></td>
                                <td><label for="ifsc_code">IFSC code <span> * </span>:</label> </td>
                                <td><input type="text" name="ifsc_code" id="ifsc_code"></td>
                            </tr>
                        </table>
                        <br><br>
                        <div class="conditions">
                            <input type="checkbox" height="20px" name="" id="conditions">
                            <label for="conditions">I agree with Terms & Conditions <span>*</span></label>
                        </div>
                        <br><br>
                        <div class="buttons">
                            <input type="reset" value="Reset">
                            <input type="submit" id="submit" value="Submit">
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>

</html>