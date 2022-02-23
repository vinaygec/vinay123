<?php require 'nav.php' ?>

<?php
    include 'dbconn.php';
echo "<br>";
echo "D:"."<br>";
$sql = "SELECT di,dn,dm FROM d";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo  "DID: " . $row["di"]."  "."DN: " . $row["dn"]."  "."DM: ". $row["dm"] ."<br>";
}
}else {
echo "0 results";
}
mysqli_close($conn);
?>