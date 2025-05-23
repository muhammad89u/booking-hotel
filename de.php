<?php
include('c.php');
$id=$_GET['id'];
$sql="DELETE from project where id='$id'";
if(mysqli_query($c,$sql))
{
    echo "deleteed data";
}
?>