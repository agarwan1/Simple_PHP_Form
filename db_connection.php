<?php 

// phpinfo();

// error_reporting(E_ALL ^ E_DEPRdgsECATED);
error_reporting(E_ALL ^ E_DEPRECATED);
$db_host = "localhost"; //"127.0.0.1";
$db_user = "root";
$db_password = "root";
$db_name = "test";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// $query = "show tables";
// $query .="VALUES ('$username','$password')";


    // $ms = mysqli_query($conn,$query);

if(!$conn) {
  die("Could not connect: " . mysqli_error($conn));
}
// mysql_select_db('mydemo',$conn);
echo "Connected successfully";
// mysqli_close($conn);
?>