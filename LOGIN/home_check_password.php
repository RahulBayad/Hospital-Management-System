<?php

    $uname = $_POST['username'];
    $rl = $_POST['role'];
    $pw = $_POST['password'];

    $connect = mysqli_connect("localhost","root","","hms");
    $query = "SELECT * FROM login WHERE BINARY email='$uname' AND role='$rl' AND BINARY password='$pw' ";
    $sql = mysqli_query($connect,$query);

    if(mysqli_num_rows($sql) == 1){
        header("Location: http://localhost/hms/Admin/dashboard.php");
    }else{
        header("Location: http://localhost/hms/HMS_home.php");
        echo "eroor";
    }
    mysqli_close($connect);
?>