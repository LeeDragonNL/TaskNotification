<?php
session_start();

$username = $_POST['uname'];
$password = $_POST['psw'];

if(!empty($username) || !empty($password)){

    $host = "localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbname = "testing";

    //create connection
    $conn = mysqli_connect($host,$dbUsername,$dbpassword,$dbname);

    if($conn == false){
        echo "gaat fout";
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else {

        $All_u = "SELECT *
                  FROM `register`
                  WHERE Username = '$username'";

        $All_p = "SELECT *
                  FROM `register`
                  WHERE Password = '$password'";

        $query_U = mysqli_query($conn,$All_u);
        $query_P = mysqli_query($conn,$All_p);


    if(mysqli_num_rows($query_U) > 0 || mysqli_num_rows($query_P) > 0 ){
      //username and password are present
      echo '<script type="text/javascript">';
      echo ' alert("You are now logged in!")';  //not showing an alert box.
      echo '</script>';
      //header('location: index.php');
      echo "<script> location.href='index.php'; </script>";

    }

    else {
        //username and password are not present
        echo "Incorrect Please try again";
    }


    }

    // Close connection
        mysqli_close($conn);
}

?>
