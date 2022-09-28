<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $grpid = $_POST['grpid'];
    $mentor = $_POST['mentor'];
    $topic = $_POST['topic'];
    $link = $_POST['link'];
    $summary = $_POST['summary'];
    $sql = "INSERT INTO `Project Bsed Learning_form`.`forms` (`name`, `phone`, `grpid`, `mentor`, `topic`, `link`, `summary`, `dt`) VALUES ('$name', '$phone', '$grpid', '$mentor', '$topic', '$link', '$summary', current_timestamp());";
    
    if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form | PHP</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Project Based Learning Activity Form</header>
    <form action="index.php" method="post">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="number" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="grpid" placeholder="Project Bsed Learning Group ID">
          <i class="fas fa-portrait"></i>
        </div>
        <div class="field">
          <input type="text" name="mentor" placeholder="Mentor Name">
          <i class="fas fa-user-tie"></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="topic" placeholder="Project Bsed Learning Topic">
          <i class="fas fa-file-alt"></i>
        </div>
        <div class="field">
          <input type="text" name="link" placeholder="Video Link">
          <i class="fas fa-link"></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Project Summary" name="summary"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Submit <i class="fa fa-paper-plane"></i></button>
        <?php
        if($insert == true){
        echo "<div class='msg'>
        <span>Project Bsed Learning Activity Successfuly Submitted</span>
        </div>";
        }
    ?>
      </div>
    </form>
  </div>
</body>
</html>