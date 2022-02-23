
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconn.php';
    $pid = $_POST["pid"];
    $pn= $_POST["pn"];
     $pm=$_POST["pm"];
     $pe=$_POST["pe"];
     $pss= $_POST["pss"];
     $cps= $_POST["cps"];
     $existsql="SELECT * FROM `p` WHERE pid='$pid'";
     $result = mysqli_query($conn,$existsql);
     $numexistrows=mysqli_num_rows($result);
     if($numexistrows>0){
     echo " usrname already there";
     }
     else{
     if(($pss==$cps)){
      $sql=" INSERT INTO `p` (`pid`, `pn`, `pm`, `pe`, `pss`) VALUES ('$pid', '$pn', '$pm', '$pe','$pss')";
       $result = mysqli_query($conn,$sql);
        if($result){
         echo" Success!";
         header("location: /d.php");
        }
     }
     else{
         echo"password do not match or usrname already there";
     }
 }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>p</title>
  </head>
  <body>
    <?php require 'nav.php' ?>
    <div class="container ">
    <h1 class="text">ENTER</h1>
    <form action="/1/index.php" method="post">
  <div class="form-check col-md-6">
    <label for="pid" class="form-label">PID:</label>
    <input type="text" class="form-control" id="pid" name="pid">  
  </div>
  <div class="form-check col-md-6">
    <label for="pn" class="form-label">PN:</label>
    <input type="text" class="form-control" id="pn" name="pn">
  </div>
  <div class="form-check col-md-6">
    <label for="pm" class="form-label">PM:</label>
    <input type="text" class="form-control" id="pm" name="pm">
  </div>
  <div class="form-check col-md-6">
    <label for="pe" class="form-label">PE:</label>
    <input type="email" class="form-control" id="pe" name="pe">
  </div>
  <div class="form-check col-md-6">
    <label for="pss" class="form-label">PAS:</label>
    <input type="password" class="form-control" id="pss" name="pss">
  </div>
  <div class="form-check col-md-6">
    <label for="cpas" class="form-label">CPAS:</label>
    <input type="password" class="form-control" id="cps" name="cps">
    <div id="cpassword" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">DONE</button>
</form>
    </div>
  </body>
</html>