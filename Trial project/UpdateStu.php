<?php
include 'Connection.php';
$Roll=$_POST['Roll'];
$Branch=$_POST['Branch'];
$Name=$_POST['Name'];
$Marks1=$_POST['Marks1'];
$Marks2=$_POST['Marks2'];
$Marks3=$_POST['Marks3'];
$Query="INSERT INTO STUDENT VALUES(".$Roll.",'".$Branch."','".$Name."',".$Marks1.",".$Marks2.",".$Marks3.")";

$Res=mysqli_query($connection,$Query);
if($Res)
{
    echo "<html><script>alert('Database Updated Successfully !')</script></html>";
}
else
{
    echo "<html><script>alert('Updation Failed !!')</script></html>";
}
mysqli_close($connection);
include 'sign.html';
?>