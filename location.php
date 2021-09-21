<?php
$currlocation=$_POST['currlocation'];
$finallocation=$_POST['finallocation'];
$way=$_POST['way'];

if (!empty($currlocation) || !empty($finallocation) || !empty($way)){
$host = "localhost" ;
$dbUsername = "root" ;
$dbPassword = "" ;
$dbname = "signup" ;
$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if (mysqli_connect_error()){
 die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
$SELECT = "SELECT NAME From location where currlocation = ? LIMIT 1" ;
$INSERT = "INSERT Into location(currlocation,finallocation,way) values (?,?,?)" ;
$stmt = $conn ->prepare($SELECT) ;
$stmt->bind_param("s",$currlocation) ;
$stmt->execute();
$stmt->bind_result($currlocation);
$stmt->store_result();
$rnum = $stmt->num_rows;
if($rnum == 0){
$stmt -> close() ;
$stmt = $conn -> prepare($INSERT);
$stmt ->bind_param("sss",$currlocation,$finallocation,$way) ;
$stmt->execute();
echo "NEW RECORD INSERTED SUCCESFULLY" ;
}else{
echo "someone already registered" ;
}
$stmt ->close();
$conn ->close(); 
}
}else{
echo "ALL FIELD ARE REQUIRED" ;
 die();
}
?>