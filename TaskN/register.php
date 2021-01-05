<?php
session_start();

$username = $_POST['regname'];
$email = $_POST['regemail'];
$password = $_POST['regpsw'];


if(!empty($username) || !empty($email) || !empty($password)){
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

        $sql = "SELECT *
                FROM `register`
                WHERE Email = '$email'";

        $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0){
      //username is present

      echo "This email has already been used , please try again";
    }
    else {

        $regquery = "INSERT INTO register (Id, username, email, password) VALUES (NULL, '$username', '$email', '$password')";

        if(mysqli_query($conn,$regquery)){
          echo '<script type="text/javascript">';
          echo ' alert("Account successfully registered!")';
          echo '</script>';
          //header('location: index.php');
          echo "<script> location.href='index.php'; </script>";
        }
        else{
            echo "ERROR: Could not able to execute $regquery. " . mysqli_error($conn);
        }
        //username is not present
    }


    }

    // Close connection
        mysqli_close($conn);
}
?>
