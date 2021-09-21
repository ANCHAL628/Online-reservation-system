<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$serial = filter_input(INPUT_POST, 'serial') ;
if (!empty($serial)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO bustiming(serial)values ('$serial')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Father's name should not be empty";
die();
}
?>
</b><br><br>
<div class="btn-group">
    <button onclick="window.location.href = 'y.html';">Previous</button>
    <button onclick="window.location.href = 'reg.html';">Next</button>
    <button onclick="window.location.href = 'indexx.html';">Home</button>
</div>
</center>
</body>
</html>