<!DOCTYPE html>
<html>
	<head>
        <title> DATABASE </title>
</head>
<body>
    <table>
        <tr> 
            <th>stt</th>
            <th> NAME </th>
            <th> ID_CMND </th>
            <th> So_xe </th>
            <th> PHONE </th>
            <th> date </th>
</tr>
<?php
// Connect to database
$server = "localhost";
$user = "admin"; 
$pass = "123456";
$dbname = "parking_system";

$conn = mysqli_connect($server,$user,$pass,$dbname);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "Select * from parking1 ";
$result = $conn -> query($sql);

if($result -> num_rows >0){
    while ($row = $result -> fetch_assoc()){
        echo "<tr><td>". $row["STT"]. "</td><td>". $row["Name"]. "</td><td>". $row["ID_CMND"]. "</td><td>". $row ["So_xe"] 
        ."</td><td>". $row["PHONE"] ."</td><td>". $row["created_at"]. "</td></tr>";

    }
}
   else {
       echo "no results";
   }        
    $conn -> close();
    ?>
    </table>
    </body>
    </html>
    
