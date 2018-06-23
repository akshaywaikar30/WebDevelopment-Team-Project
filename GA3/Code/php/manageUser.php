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
          <h2>Manage Users</h2>
          </div>
          <div class="container">
            <div class="row">
                <div class="col-sm-12">

    <?php
    $sql="SELECT name, email FROM person where userType='end_user'";
    $imagequery_run = $connection->query($sql); 
    $result = mysqli_query($connection, $sql);
    echo '<form action="manageUser.php" method="post">';

    if ($imagequery_run) {
              echo '<table class="table container">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Choose Any one</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Email</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
      while($row = $result->fetch_assoc())
      {
        

        echo '<tr>';
        echo '<td><div class="radio">';
        echo '<label><input type="radio" value="'.$row["email"].'" name="optradio"></label>';

        echo '</div></td>';
        echo '<td>'.$row["name"].'</td>';
        echo ' <td>'.$row["email"].'</td>';
        echo ' </tr>';

        
      }
        echo '</tbody>';
        echo '</table>';  
    }
    else{
      echo "No User found";
    }

    if((isset($_POST['submit'])))
    {
      if (isset($_POST['optradio'])) {
        echo $_POST['optradio'];
        $emailDelete = $_POST['optradio'];
       $sqldel='Delete from person where email="'.$emailDelete.'"';
      
       mysqli_query($connection,$sqldel); 
          echo "Data Deleted";
      }
    }
    if((isset($_POST['edit']))){
      $_SESSION['selection']=$_POST['optradio'];
      header('Location: editUser.php');
    }
    
    ?>
                    <!-- <table class="table container">
      <thead>
        <tr>
          <th scope="col">Choose Any one</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
           <td><div class="radio">
           <label><input type="radio" name="optradio"></label>
           </div></td>
          <td>John Terry</td>
          <td>john@gmail.com</td>
        </tr>
        <tr>
          <td><div class="radio">
          <label><input type="radio" name="optradio"></label>
          </div></td>
          <td>John Terry</td>
          <td>john@gmail.com</td>
        </tr>
        <tr>
            <td><div class="radio">
            <label><input type="radio" name="optradio"></label>
            </div></td>
          <td>John Terry</td>
          <td>john@gmail.com</td>
        </tr>
      </tbody>
    </table> -->
                </div>
            </div>
            
    </div>
    <div class="container">
            <a class="btn btn-success" href="newUser.php" id="">Add User</a>
        
            <input type="submit" name="submit" class="btn btn-danger" value="Delete User">
       
            <input type="submit" name="edit" class="btn btn-primary" value="Edit User" href="editUser.php">
        </form>
    </div>
    </div>
    <footer id="footadmin">   
            <div class="footer-copyright py-3 text-center bg-dark text-white">
            © 2018 Copyright:
            <a href="index.php"> Currency@Converter.com </a>
        </div>
    </footer>
      </body>
      </html>
