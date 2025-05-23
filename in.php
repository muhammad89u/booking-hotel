<?php
include('c.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO project(name,email,password)VALUES('$name','$email','$password')";
    if(mysqli_query($c, $sql)){
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($c);
    }
}
?>