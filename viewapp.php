<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta name="robots" content="index, follow" />
    <meta name="title" content="ETU “LETI digital and scientific educational platform”" />
    <meta name="keywords" content="LETI,ETU digital,scientifc,educational,platform"/>

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="appview.css">

     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <title>Digital Educational Platform</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple1.png" />
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
  </head>
  <body>
    

<div class="container">
    <div class="row">
        <div class="col">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" aria-current="" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Main Site</a>
      </li>
      <li class="nav-item">
           
   

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <a class="nav-link"> <strong><?php echo $_SESSION['username']; ?></strong></a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="profile.html?logout='1'" style="color: red;">logout</a> 
         </li>
      </li>
    </ul>
  </div>
  <?php        
include_once 'db_connection.php';
$result = mysqli_query($conn,"SELECT * FROM applicants");
?>

    <?php endif ?>
  <div class="card-body">
     <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          
        </h3>
      </div>
    <?php endif ?>
    <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
    <h5 class="card-title">List of Applicants</h5>
     <p class="card-text">“Talent wins games, but teamwork and intelligence win championships.”</p>
     <figcaption class="blockquote-footer">Michael Jordan</figcaption>
    <div class="container">
                <div class="row">
                    <div class="col">
<?php
if (mysqli_num_rows($result) > 0) {
?>
<caption>List of Applicants</caption>
 <table  class="table table-stripped">  
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Job Applied</th>
      </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <tbody>
            <tr><th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["email_app"]; ?></td>
                <td><?php echo $row["phone_empl"];?></td>
                <td><?php echo $row["applied_job"];?></td>
            </tr>
        </tbody>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
                        </div>
                    </div>
                </div>
           
  </div>
</div>
</div></div></div>
  

            

             <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
  </body>
  </html>