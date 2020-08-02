<?php
$name = $_POST['name'];
$email = $_POST['enail'];
$mobile_no = $_POST['mobile_no'];
$message = $_POST['message'];

if (!empty($name) || !empty($email) || !empty($mobile_no) || !empty($message))
{
    $host ="localhost";
    $dbUsername ="prasad";
    $dbPassword ="123";
    $dbname ="register";
}
    $conn = new mysqli($host, $dbusername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else{
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = 
    }
else{
    echo "All Field Are Required";
    die();
}

}

