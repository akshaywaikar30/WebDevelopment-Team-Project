
    <div class="container mt-md" id="">
        <h2>Adding new user</h2>
    </div>
    <?php
if(isset($_POST['submit']))
    {
     
      $name=$_POST["name"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $contact=$_POST["contact"];
      $addr=$_POST["addr"];
      $date=$_POST["date"];
      $err="";
      $nameErr="";
      $emailErr="";
      $passErr="";
      $contactErr="";
      $contactflag=0;
      $dateErr="";
      $addrErr="";

      if ($name==""||$name==null) {
        $nameErr="Please enter name<br/>";
        $err=$nameErr;
      }

      if($password=""||$password==null){
        if($name==""||$name==null){

          $passErr="Please enter password<br/>";
          $err=$err.$passErr;
        }
        else{
          $passErr="Please enter password<br/>";
          $err=$passErr;
        }
      }
      if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $contact)) {
        $contactflag=1;
        if($name==""||$name==null||$password=""||$password==null){
          $contactErr="Please enter valid contact<br/>";
          $err=$err.$contactErr;
        }
        else
        { $contactflag=1;
           $contactErr="Please enter valid contact<br/>";
           $err=$contactErr;
        }
      }

      if($addr==""||$addr==null){
        if ($name==""||$name==null||$password=""||$password==null||$contactflag==1) {
          $addrErr="Please enter address<br/>";
          $err=$err.$addrErr;
        }
        else{
           $addrErr="Please enter address<br/>";
           $err=$addrErr;
        }
      }

      if($date==""||$date==null){
         if ($name==""||$name==null||$password=""||$password==null||$contactflag==1){
          $dateErr="Please enter date<br/>";
          $err=$err.$dateErr;
         }
         else{
          $dateErr="Please enter date<br/>";
          $err=$dateErr;
         }
      }

     if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
   if ($name==""||$name==null||$password=""||$password==null||$contactflag==1||$dateErr==""||$dateErr==null){
           $emailErr = "Invalid email format<br/>"; 
           $err=$err.$emailErr;
         }else{
             $emailErr = "Invalid email format<br/>"; 
              $err=$emailErr;
}
}

      if($err!=""){
        echo $err;
      }
      else{
      $sql = "INSERT INTO person (name, email,password, DOB, contact, address, userType)
          VALUES ('$name','$email',SHA1('$password'),'$date','$contact','$addr','end_user')";
          mysqli_query($connection,$sql);
          echo "Data Inserted";
        }
        }
        
?>
    <div class="container">
        <form method = "post" action="newUser.php">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
          <label for="E-mail">E-mail:</label>
          <input type="E-mail" class="form-control" id="email" placeholder="Enter E-mail" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>    
        <div class="form-group">
          <label for="contact">Contact:</label>
          <input type="text" class="form-control" id="contact" placeholder="682-456-7890" name="contact">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="address" class="form-control" id="addr" placeholder="E.g. 1002 Greek Row Dr,Apt 212, Arlington, TX-76013" name="addr">
        </div>
        <div class="form-group"> <!-- Date input -->
            <label class="control-label" for="date">Date of Birth</label>
            <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text" name="date" />
          </div>
        <div class="form-check">
        </div>
        <input type="submit" name="submit" onclick="validateuser()" class="btn btn-success"/>
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