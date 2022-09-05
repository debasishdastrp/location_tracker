<?php
$conn = mysqli_connect("localhost","root","","location");
if(!$conn)
{
    die("Connection Error: ". mysqi_connection_error());
}
else{
    $sql = "SELECT `id`, `location_time`, `latitude`, `longitude`,concat('<a href=https://www.google.com/maps/@',latitude,',',longitude,',','16z target=_blank>Map</a>') as MapURL FROM `location_data`";
    $r=mysqli_query($conn,$sql);
    
    
}
?>
<html>
    <body>
        <h2>View saved Location Data</h2>
        <div style="font-family: calibri">
            <table border="1">
                <tr>
                    <th>Captured on</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Show Map</th>
                </tr>
                <?php
                while($res = mysqli_fetch_array($r))
                {
                    ?>
                <tr>
                    <td><?=$res['location_time']?></td>
                    <td><?=$res['latitude']?></td>
                    <td><?=$res['longitude']?></td>
                    <td><?=$res['MapURL']?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>
</htmL>