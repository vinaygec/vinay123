<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconn.php';
    $di = $_POST["did"];
    $dn= $_POST["dn"];
     $dm=$_POST["dm"];
     $de=$_POST["de"];
       $sql=" INSERT INTO `d` (`di`, `dn`, `dm`, `de`) VALUES('$di', '$dn', '$dm', '$de')";
       $result = mysqli_query($conn,$sql);
       if($result)
           echo "Success!";
       else
         echo "error!";
    }
    

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>d</title>
  </head>
  <body>
    <?php require 'nav.php' ?>
    <div class="container ">
    <h1 class="text">ENTER </h1>
    <form action="/1/d.php" method="post">
  <div class="form-check col-md-6">
    <label for="did" class="form-label">DID:</label>
    <input type="text" class="form-control" id="did" name="did">  
  </div>
  <div class="form-check col-md-6">
    <label for="dn" class="form-label">DN:</label>
    <input type="text" class="form-control" id="dn" name="dn">
  </div>
  <div class="form-check col-md-6">
    <label for="dm" class="form-label">DM:</label>
    <input type="text" class="form-control" id="dm" name="dm">
  </div>
  <div class="form-check col-md-6">
    <label for="de" class="form-label">DE:</label>
    <input type="email" class="form-control" id="de" name="de">
    <div id="pe1" class="form-text">We.</div>
  </div>
  <button type="submit" class="btn btn-primary">DONE</button>
</form>
    </div>
  </body>
</html>