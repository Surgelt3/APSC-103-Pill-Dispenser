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
        <h1 class="hero__heading">Schedule</h1>
        <div class="arrow_left"></div>
        <div class="arrow_right"></div>
          
        <table class="Main__Schedule">
          <tr>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wendsday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
          </tr>
          <tr>
            
          </tr>
        </table>
      </div>
    </div>


    <table> </table>
  </body>
</html>

<?php 
}else{
     header("Location: Index.PHP");
     exit();
}
 ?>
