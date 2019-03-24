<?php
include "Connection.php";

$Name=$_POST['Name'];
$ID=$_POST['ID'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

if($pass1==$pass2)
{
    $query="INSERT INTO Faculty (ID,Nam,Pass)  VALUES('".$ID."','".$Name."','".$pass1."')";
    
    $success=mysqli_query($connection,$query);
    
    if($success)
    {
        echo "<html><script>alert('Registration Successful')</script></html>";
    }
    else
    {
        echo "<html><script>alert('Registration Failed')</script></html>";
    }
}
elseif($connection)
{
    echo "<html><script>alert('Connection with database couldnot be made')</script></html>";
}
else
{
    echo "<html><script>alert('Register Again')</script></html>";
}
mysqli_close($connection);
include 'index.html';
?>
