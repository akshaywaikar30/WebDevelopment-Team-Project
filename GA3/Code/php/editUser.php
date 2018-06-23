<?php
$servername="localhost";
$db="currencyfluctuation";
  $user = "root";
  $pass="root";
$connection = mysqli_connect($servername,$user,$pass,$db);
  session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>Currency Conversion</title>
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <figure class="logo"><img class="rounded-circle" src="../images/logo.jpeg" width="55" height="55" alt="logo" id="logo"></figure>
        <a class="navbar-brand" href="#"><h4 id="heading">Currency Converter</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php"><b><h5>Home</h5></b></a>
                    <a class="nav-item nav-link" href=""><b><h5>Logout</h5></b></a>
                </div>
            </div>
    </nav>
    <div class="container mt-md" id="">
        <h2>Edit a existing user</h2>
    </div>
   <?php $emailsel=  $_SESSION['selection'];
     $sqldisp='Select name , contact, address,DOB from person where email="'.$emailsel.'"';
     $name ="";
     $contact = "";
     $address ="" ;
     $date = "" ;
     $query = mysqli_query($connection,$sqldisp);
     $data = $query->fetch_assoc();
      $name = $data["name"];
      $contact = $data["contact"];
      $address = $data["address"];
      $date = $data["DOB"];
     


    echo '<div class="container">';
    echo    ' <form action="editUser.php" method="post">';
      echo'  <div class="form-group">';
         echo' <label for="name">Name:</label>';
        echo'  <input type="name" class="form-control" id="name" value="'.$name.'" name="name">';
        echo'</div>';
      echo'  <div class="form-group">';
        echo'  <label for="E-mail">E-mail:</label>';
         echo'<input type="E-mail" class="form-control" id="E-mail" placeholder="'. $emailsel.'" name="E-mail" readonly>';
       echo' </div>';
       echo' <div class="form-group">';
         echo' <label for="contact">Contact:</label>';
         echo' <input type="contact" class="form-control" id="contact" value="'.$contact.'" name="contact">';
        echo'</div>';
       echo' <div class="form-group">';
        echo' <label for="address">Address:</label>';
        echo'  <input type="address" class="form-control" id="addr"value="'.$address.'" name="addr">';
       echo' </div>';
        echo'<div class="form-group">';
         echo'   <label class="control-label" for="date">Date of Birth</label>';
           echo' <input class="form-control" id="date" name="date" value="'.$date.'" type="text"/>';
          echo'</div>';
       echo' <div class="form-check">';
        echo'</div>';
        ?>
        <?php
       

         
        if ((isset($_POST['submit']))) {
           $name=$_POST["name"];
            $contact=$_POST["contact"];
            $addr=$_POST["addr"];
            $date=$_POST["date"];
            $sqledit="UPDATE person
SET name = '$name', contact = '$contact', address='$addr', DOB='$date'
WHERE email='$emailsel'";
 mysqli_query($connection,$sqledit);
          echo "Data Updated";
        }
        ?>
        <input type="submit" name="submit" class="btn btn-primary" value="Edit User">
        <a class="btn btn-warning" href="manageUser.php" id="">Manage User</a>
      </form>

    </div>
    <footer id="fNewUser">
            <div class="footer-copyright py-3 text-center bg-dark text-white">
            © 2018 Copyright:
            <a href="index.php"> Currency@Converter.com </a>
        </div>
    </footer>
      </body>
      </html>