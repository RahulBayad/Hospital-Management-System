<?php
    
    $connect = mysqli_connect("sql310.infinityfree.com", "if0_36887651", "wVd0sucYGRa", "if0_36887651_hms_db");
    if(!$connect){
        echo "error in db connectivity";
    }
    echo "database connected";
    
?>