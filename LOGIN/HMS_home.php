<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        ::-webkit-scrollbar {
            width: 0px;
        }
        body {
            margin: 0px;
            font-family: poppins,sans-serif;
            background-image: url(./../photos/1stpage.jpg);
            background-repeat: no-repeat;
            background-size: 100% 940px;
        }

        .header {
            /* border: 2px solid red; */
            /* position: fixed; */
            width: 100%;
            background-color: rgb(10, 45, 133);
            display: flex;
            box-shadow: 0px 5px 5px;
            /* margin: 3px -4px; */
        }

        .title {
            margin: 0 auto;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
            word-spacing: 2px;
            color: white;
            line-height: 80px;
        }

        .logo {
            margin-left: 20px;
        }

        .middle {
            margin: 0px;
            justify-content: center;
        }

        #box {
            width: 34%;
            /* border: 2px solid black;  */
            margin: 8% auto;
            background-color: #fff;
            border-radius: 13px;
            box-shadow: 5px 5px 9px;
            opacity: 0.95;

        }
        #loginForm {
            margin:0 auto;
            width: 400px;
            /* border:1px solid red; */
            font-size: 22px;
        }

        .features {
            margin-top: -7px;
            background-color: rgb(118, 184, 241);
        }

        .footer {
            display: flex;
            background-color: rgb(10, 45, 133);
            padding: 10px 0px;
            /* overflow: scroll; */
        }

        .footer .ins a {
            font-size: 30px;
            line-height: 60px;
            text-decoration: none;
            color: white;
            padding-top: 10px;
            position: relative;
            top: -22px;
            margin-left: 4%;
        }

        .footer .ins {
            margin-left: 11%;
        }
        .last {
            position: relative;
            top: -25px;
            background-color: rgb(10, 45, 133);
            box-shadow: -1px -3px 7px black;

        }
        #contact {
            text-decoration: underline;
            color: white;
            font-size: 25px;
            margin-top: 20px;
            left: 10px;
            text-align: center;
        }
        form .input span{
            position:absolute;
            font-size: 18px;
            left: 5px;
            bottom: 0px;
            pointer-events: none;
            transition: all 200ms;
            /* opacity:0; */
        }
        form .field input{
            width: 400px;
            line-height: 30px;
            font-size: 17px;
            background-color: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid black;
            transition: all 200ms;
        }
        form select{
            width: 400px;
            line-height: 30px;
            font-size: 18px;
            background-color: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid black;
            transition: all 200ms;
        }
        .field .input{
            position:relative;
        }
        .textbox:focus ~ .formlabel,
        .textbox:not(:placeholder-shown).textbox:not(:focus)~.formlabel {
            bottom: 33px;
            font-size: 13px;
            padding-left: 0;
            margin-left: -5px;
        }
        .field{
            display:flex;
            flex-direction: column;
            gap:40px;
        }
    </style>
</head>

<body>

    <div class="header">
        <img class="logo" src="./../photos/newlogo.gif" height="80px" width="80px" style="border-radius: 50%;" alt="">
        <div class="title">DRS - Hospital Management System</div>
    </div><br>
    <div class="middle">
        
        <div id="box">
            <h1
                style="font-weight:500; color: rgb(234, 232, 232); line-height: 60px; font-size: 35px; text-align: center; background-color:rgb(0, 37, 131); margin-top: 0;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                Login</h1>
            <div class="form">
            <form id="loginForm" action="./home_check_password.php" method="post">
                <br>
                    <div class="field">
                        <div class="input">
                            <input class="textbox" type="text" name="username" placeholder=" ">
                            <span class="formlabel" for="userName">Username</span> 
                        </div>
                        <div class="input">
                                <select id="role" name="role">
                                    <option value="role" disabled selected>Role</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="employee">Employee</option>
                                    <option value="admin">Admin</option>
                                    <option value="patient">Patient</option>
                                    <option value="Nurse">Nurse</option>
                                </select>
                        </div>
                        <div class="input">
                            <input class="textbox" type="password" id="passWord" name="password" placeholder=" ">
                            <span class="formlabel" for="passWord">Password</span>
                        </div>
                    </div><br>
                    <!-- <button type="submit"> submit</button> -->
                    <div class="btn" style="text-align: center;">
                    <input type="submit" value="Login" style="padding:7px 20px;font-size:18px;color:white;background-color:rgb(0, 0, 181);border:none;border-radius: 3px;"></div><br>
            </form></div>
        </div>
    </div>
    <div class="features">
        <p style="text-align: center;color: white;font-size: 50px;text-decoration: underline;">Services Provided by us
        </p>
        <img src="./../photos/bkg_removed_features.png" width="80%" height="340px" style="margin-left: 11%;" alt="">
    </div>
    <div class="last">
        <div id="contact">Contact us through
            <br><br>
        </div>
        <div class="footer">
            <div class="ins"><img src="./../photos/whatsuplogo.png" width="18%" alt="" style="border-radius:13px;"><a
                    href="https://api.whatsapp.com/send?phone=6353499129" target="_blank">Whats App</a></div>
            <div class="ins"><img src="./../photos/insta.png" width="18%" alt="" style="border-radius: px;"><a
                    href="https://www.instagram.com/mr_rahul__079/" target="_blank">Instagram</a></div>
            <div class="ins"><img src="./../photos/gmail.png" width="20%" alt="" style="border-radius: 10px;"><a
                    href="mailto:rahulbayad05@gmail.com?" target="_blank">Gmail</a></div>
        </div>
    </div>
    </div>

</body>

</html>