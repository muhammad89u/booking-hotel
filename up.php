<?php
include('c.php');
if($_GET['id'])
{
    $id=$_GET['id'];
    $sql="SELECT *from project where id='$id'";
    $r=mysqli_query($c,$sql);
    if(mysqli_num_rows($r)>0)
    {
        while($row=mysqli_fetch_assoc($r))
        {
            ?>
            <style>
                form {
                    max-width: 400px;
                    margin: 20px auto;
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 8px;
                    background-color: #f9f9f9;
                }
                input[type="text"], input[type="password"] {
                    width: 100%;
                    padding: 10px;
                    margin: 8px 0;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
                button {
                    background-color: #4F46E5;
                    color: white;
                    padding: 10px 15px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    font-size: 16px;
                }
                button:hover {
                    background-color: #4338ca;
                }
            </style>
            <form method="post">
                <input type="text" name="name"value="<?php echo $row['name'];?>" ><br>
                <input type="text" name="email" value="<?php echo $row['email'];?>"><br>
                <input type="password" name="password" value="<?php echo $row['password'];?>"><br>
                <button type="submit" name="up">Update</button>
            </form>
            <?php
        }
    }else{
        echo "no data";
    }
}
?>
<?php
if(isset($_POST['up']))
{
     $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="UPDATE project set name='$name',email='$email',password='$password' where id='$id'";
    if(mysqli_query($c,$sql))
    {
        echo "updated data";
    }
}
?>
