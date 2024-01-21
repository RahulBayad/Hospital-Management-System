<?php
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood_group'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $em_phone = $_POST['em_phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $insu_comp = $_POST['insu_name'];
    $insu_id = $_POST['insu_id'];
    $holder = $_POST['holder'];
    $allergies = $_POST['allergies'];
    $recent_injury = $_POST['recent_injury'];
    $reason = $_POST['reason'];
    $d_name = $_POST['d_name'];
    $ward = $_POST['Wards'];
    $room = $_POST['room'];
    $admit_date = $_POST['admit_date'];
    $admit_time= $_POST['admit_time'];
    $status = $_POST['status'];
    $discharge = $_POST['discharge_date'];
    $discharge_time = $_POST['discharge_time'];

    $connect = mysqli_connect("localhost", "root", "", "hms");
    $query = "INSERT INTO inpatients(p_id, i_fname,i_mname,i_lname,i_dob,i_gender,i_blood,i_phone,i_email,emer_phone,i_city,i_address,insu_comp,insu_id,holders_name,allergies,recent_injury,reason,d_name,ward,room,admit_date,admit_time,status, discharge_date,discharge_time)
            VALUES('$id','$fname','$mname','$lname','$dob','$gender','$blood','$phone','$email','$em_phone','$city','$address','$insu_comp','$insu_id','$holder','$allergies','$recent_injury','$reason','$d_name','$ward','$room','$admit_date','$admit_time','$status','$discharge','$discharge_time')";
    $runQuery = mysqli_query($connect,$query);

    header("Location: http://localhost/hms/Admin/inpatient.php");
    $off = mysqli_close($connect);
?>
<html>
    <body>
    <div class="edit_inpatient" id="edit">
            <i id="cancel-btn" class="fa-solid fa-xmark" onclick="cancelEdit()"></i>
            <h1>Edit Patient</h1>
            <br>
            <form action="http://localhost/hms/Admin/inpatient_edit.php" method="post">
                <br><br>
                <table border="0px" id="edit_patient">
                    <tbody>
                        <tr>
                            <td width="57%">
                                <span class="input">
                                    <input class="textbox" name="fname" type="text" placeholder=" " id="fname" value="<?php echo $data['i_fname']; ?>"  >
                                    <span class="formlabel" id="firstName">First Name</span> 
                                </span>
                                <span class="input">
                                    <input class="textbox" name="mname" type="text" placeholder=" " id="mname" value="<?php echo $data['i_mname']; ?>" >
                                    <span class="formlabel" id="middleName">Middle Name</span> 
                                </span>
                                <span class="input">
                                    <input class="textbox" name="lname" type="text" placeholder=" " id="lname" value="<?php echo $data['i_lname']; ?>" >
                                    <span class="formlabel" id="">Last Name</span> 
                                </span>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" type="text" name="id" placeholder=" " id="patient_id" disabled value="<?php echo $data['p_id']; ?>" >
                                    <span class="formlabel">Patient Id</span> 
                                </div>
                            </td>
                        </tr>
                        
                        <tr><td> </td><td> </td></tr>
                        <tr>
                            <td width="50%">
                                <div class="date">
                                    <!-- <input class="textbox" type="text" placeholder=" " id="fname"> -->
                                    <span>Date of Birth * : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="date" name="dob" id="dob" value="<?php echo $data['i_dob'] ?>" >
                                    <!-- <span class="formlabel"> Date of birth *</span> -->
                                </div>
                            </td>
                            <td> <label for="gender" >&nbsp;Gender<span> * </span> : &nbsp;</label> 
                                <input type="radio"  name="gender" value="Male" checked >&nbsp;
                                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" value="Female" >&nbsp;
                                <label for="female">Female</label>&nbsp;&nbsp;
                                <input type="radio" name="gender" value="Other" >&nbsp;
                                <label for="female">Other</label>&nbsp;&nbsp;
                            </td>
                             
                            
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <!-- <input class="textbox" type="text" placeholder=" " id="fname">
                                    <span class="formlabel">Mobile No. *</span>  -->
                                    <select  name="blood_group" id="blood_group" >
                                        <option value="<?php echo $data['i_blood']; ?>"><?php echo $data['i_blood']; ?></option>
                                        <option value="a+" selected>A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O-</option>
                                        <option value="ab+">AB+</option>
                                        <option value="ab-">AB-</option>
                                    </select>
                                    <!-- <span class="formlabel">Blood Group *</span> -->
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" type="text" name="phone" placeholder=" " id="mobile_no" value="<?php echo $data['i_phone'] ?>" >
                                    <span class="formlabel">Mobile No. *</span> 
                                </div>
                            </td>
                            
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" type="email" name="email" placeholder=" " id="email" value="" >
                                    <span class="formlabel">Email</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" type="text" name="em_phone" placeholder=" " id="emergency_no" value="" >
                                    <span class="formlabel">Emergency Contact No. *</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" type="text" name="city" placeholder=" " id="city" value="Ahmedabad,Gujarat" >
                                    <span class="formlabel">city/state *</span> 
                                </div>
                            </td>
                            <td>
                                <label for="address">Address : </label>
                                <textarea name="address" id="address" cols="30" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td style="height: 80px;"><h3 style="color:rgb(86, 86, 225);">Insurance Infromation</h3></td></tr>
                        <!-- <tr><td></td></tr> -->
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="insu_name" type="text" placeholder=" " id="insurance_company" value="Lic" >
                                    <span class="formlabel">Insurance Company</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="insu_id" type="text" placeholder=" " id="insurance_id" value="AH853622" >
                                    <span class="formlabel">Insurance ID</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="holder" type="text" placeholder=" " id="policy_holder_name" value="Suresh Shah" >
                                    <span class="formlabel">Policy Holder's Name</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td style="height: 80px;"><h3 id="heading3" style="color:rgb(86, 86, 225);">Admit Information</h3></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="allergies" type="text" placeholder=" " id="allergies" value="No" >
                                    <span class="formlabel">Allergies</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="recent_injury" type="text" placeholder=" " id="recent_injury" value="No" >
                                    <span class="formlabel">Recent Injury/Disease</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="reason" type="text" placeholder=" " id="reson" value="Accident" >
                                    <span class="formlabel">Reason For Admit *</span> 
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input class="textbox" name="d_name" type="text" placeholder=" " id="doctor_name" value="Dr. Mahesh Patel" >
                                    <span class="formlabel">Doctor Name *</span> 
                                </div>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr> 
                            <td>
                                <div class="input">
                                    <select  name="Wards" id="wards" >
                                        <!-- <option value="Ward"  selected>Choose Ward *</option> -->
                                        <option value="<?php echo $data['ward']; ?>"><?php echo $data['ward']; ?></option>
                                        <option value="Emergency Ward" selected>Emergency Ward</option>
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
                                    <input class="textbox" name="room" type="text" placeholder=" " id="room_bed_no" value="A12-34" >
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
                                    <input type="datetime-local" name="admit_date" id="admit_time" value="<?php echo $data['admit_date'] ?>" >
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <select name="status" id="status">
                                        <!-- <option value="status" disabled>Status</option> -->
                                        <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
                                        <option value="admitted" Selected>Admitted</option>
                                        <option value="discharged">Discharged</option>
                                    </select>
                                </div>
                            </td>
                            
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <div class="date">
                                    <span>Discharge Date * :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="datetime-local" name="discharge_date" id="dob" value="<?php echo $data['discharge_date']; ?>" >
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><br><br>
                <div class="btn">

                    <!-- <input type="button" value="Edit" onclick="abcde()"> -->
                    <input type="button" value="Print" onclick="window.print() ">
                    <input type="submit" value="Save">
                </div>
                <br><br>
            </form><?php  ?>
        
        </div>
    </body>
</html>
