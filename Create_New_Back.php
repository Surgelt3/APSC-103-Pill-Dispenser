<?php
include "db_conn.php";
session_start();


if(isset($_POST['date'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user_id = $_SESSION['user_id'];

    $date = validate($_POST['date']);

    if (empty($date)){
        header("Location: index.php?error = User ID is required");
        exit();
    }else{
        
        $sql = "INSERT INTO `dates` (`$user_id`) VALUES ('$date')";

        if ($conn->query($sql) === TRUE) {
            header("Location: Schedule.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }

}else{
    header("Location: Schedule.php");
    exit();
}