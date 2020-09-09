<?php
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');

if(!empty($email))
{
if(!empty($password))
{

$host="localhost";

$dbusername="root";

$dbpassword="";

$dbname="webpage";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
die('ConnectError('.mysqli_connect_errno().')'.
   mysqli_connect_error());
}
else{
$sql="INSERT INTO login(emailid,password)
       values('$email','$password')";
}
if($conn->query($sql))
{
echo"new record inserted";
}else{
echo "Error: " . $sql."<br>".$conn->error;
}
$conn->close();
}
else{
echo"password  must not be empty";
die();
}
}
else{
echo"user name must not be empty";
die();
}

?>