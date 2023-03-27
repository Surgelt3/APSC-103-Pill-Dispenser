<?php
include "db_conn.php";
session_start();

if(isset($_POST['user_id'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user_id = validate($_POST['user_id']);

    if (empty($user_id)){
        header("Location: index.php?error = User ID is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_id = $user_id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if($row['user_id'] === $user_id){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['phone'] = $row['phone'];
                /*echo "Logged in!". $_SESSION['user_id'];*/
                header("Location: Schedule.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect User ID");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User ID");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}