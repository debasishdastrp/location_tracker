<?php
$conn = mysqli_connect("localhost","root","","location");
if(!$conn)
{
    die("Connection Error: ". mysqi_connection_error());
}
else{
    echo "Connection established successfully";
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $sql = "INSERT INTO `location_data`(`latitude`, `longitude`) VALUES ('$lat','$lon')";
    $r=mysqli_query($conn,$sql);
}
?>