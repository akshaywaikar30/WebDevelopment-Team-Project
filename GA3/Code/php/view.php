  <?php
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
                  <a class="nav-item nav-link" href="about.php"><b><h5>About us</h5></b></a>
                  <a class="nav-item nav-link" href=""><b><h5>Logout</h5></b></a>                
              </div>
          </div>
  </nav>
  <form class="col-sm-12 mt-md">
      <h3 class="text-center">Currency Convertor</h3>  
  <div class="btn-group col-sm-2 mt-sm">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Base Currency
    </button>
    <div class="dropdown-menu dropdown-menu-right">
      <button class="dropdown-item" type="button">INR</button>
      <button class="dropdown-item" type="button">USD</button>
      <button class="dropdown-item" type="button">GBP</button>
    </div></div>
    <div class="btn-group col-sm-2 mt-sm">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Foreign Currency
    </button>
    <div class="dropdown-menu dropdown-menu-right">
      <button class="dropdown-item" type="button">INR</button>
      <button class="dropdown-item" type="button">USD</button>
      <button class="dropdown-item" type="button">GBP</button>
    </div>
  </div>
    <div class="col-sm-10 mt-sm">
        <input type="number" name="" class="form-group border1 col-sm-5" placeholder="Enter your amount to be converted.">
    </div>

      
  <div class="col-sm-10">
      <button  type="submit" class="btn btn-primary  mt-sm">Submit</button> 
  </div>
      <div class="col-sm-10 mt-sm ">
          <label><h4>Result:</h4></label>
              <input type="text" name="" class="col-sm-4 border1 form-group" readonly>
      </div>  
  </form>
  <footer id="footadmin">
          <div class="footer-copyright py-3 text-center bg-dark text-white">
          © 2018 Copyright:
          <a href="index.php"> Currency@Converter.com </a>
      </div>
  </footer>
  </body>
  </html>