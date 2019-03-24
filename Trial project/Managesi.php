<?php
//echo "<html><script>alert('HOHO')</script></html>";
include 'Connection.php';

$Name=$_POST['Name'];
$ID=$_POST['ID'];
$Pass=$_POST['pass'];

$Query="SELECT ID,Nam,Pass FROM Faculty Where ID='".$ID."' and Pass='".$Pass."'";
$Res=mysqli_fetch_assoc(mysqli_query($connection,$Query));
//print_r($Res);
if($Res)
{
    echo "<html><script>alert('Welcome')</script></html>";
    mysqli_close($connection);
    include "sign.html";
}
else
{
    echo "<html><script>alert('Wrong User Name or Password')</script></html>";
    mysqli_close($connection);
    include 'st.html';
}


?>