<?php
include "db_conn.php";

if(isset($_POST['uname'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = $_POST['uname'];

    if (empty($uname)){
        header("Location: index.php?error = User ID is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_id = $uname";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if($row['user_id'] === $uname){
                echo "Logged in!";
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: Main.html");
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