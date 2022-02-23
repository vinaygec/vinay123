<?php require 'nav.php' ?>

<?php
    include 'dbconn.php';
echo "<br>";
echo "P :"."<br>";
$sql = "SELECT pid,pn,pm FROM p";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo  "PID: " . $row["pid"]."  "."PN: " . $row["pn"]."  "."PM: ". $row["pm"] ."<br>";
}
}else {
echo "0 results";
}
mysqli_close($conn);
?>