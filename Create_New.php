<?php 
session_start();
include "db_conn.php";



if (isset($_SESSION['user_id'])) {
    

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main_Schedule</title>
    <link rel="stylesheet" href="Styles.css" />
    <link
      rel="stylesheet"
    />
  </head>
  
    
  <body>
    <nav class = "navbar">
      <div class = "navbar__container"> 
        <a href = "#home" id = "navbar__logo">Pill Dispenser</a>
        <a href="logout.php">Logout</a>
        <a href="Create_New.php">Create New</a>
      </div>
    </nav>
    <div class="hero" id = "home">
      <div class = "hero__container">
        <form action="Create_New_Back.php" method="post">
        <input type="text" name="date" placeholder="YYYY-MM-DD hh:mm:ss"><br>
        <button type="new_event">Create New Event</button>
      </div>
    </div>


    <table> </table>
  </body>
</html>

<?php 
}else{
     header("Location: Schedule.PHP");
     exit();
}
 ?>
