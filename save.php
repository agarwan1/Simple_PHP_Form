<?php 
include ('db_connection.php');
if(!empty($_POST)){
  if(!empty($_POST['username'])) {
    $userName = $_POST['username'];
    $query = "insert into user_sample (username) values( '$userName');";
    //print $query; //die; 
    $saveFlag = mysqli_query($conn, $query);

    if($saveFlag) {
      print "Record saved successfuly."; 
    } else {
      print "There is some error: <br />" . mysqli_error($conn);
      // die("Could not connect: " . mysqli_error($conn));
    }
  }
}

// if(!$conn) {
//   die("Could not connect: " . mysqli_error($conn));
// } 

// mysqli_close($conn);
?>