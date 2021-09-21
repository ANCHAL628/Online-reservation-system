<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$NAME = filter_input(INPUT_POST, 'NAME');
$EMAIL = filter_input(INPUT_POST, 'EMAIL');
$password = filter_input(INPUT_POST, 'password');

if (!empty($NAME)){
if (!empty($EMAIL)){
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
$sql = "INSERT INTO register(NAME,EMAIL,password)values ('$NAME','$EMAIL','$password')";
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
}
else{
echo "Username should not be empty";
die();
}
?>
</b><br><br>
<div class="btn-group">
    <button onclick="window.location.href = 'signup.html';">Previous</button>
    <button onclick="window.location.href = 'bustiming.html';">Next</button>
    <button onclick="window.location.href = 'index.html';">Home</button>
</div>
</center>
</body>
</html>