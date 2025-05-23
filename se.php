<style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        font-family: Arial, sans-serif;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        animation: fadeIn 1s ease-in-out;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: center;
    }
    th {
        background-color: #4F46E5;
        color: white;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #e0e7ff;
        transition: background-color 0.3s ease;
    }
    a {
        color: #4F46E5;
        text-decoration: none;
        font-weight: 600;
    }
    a:hover {
        text-decoration: underline;
    }
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
</style>
<table border="1" style="margin: auto;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Dleate</th>
    </tr>
    <?php
    include('c.php');
    $sql="SELECT * from project";
    $r=mysqli_query($c,$sql);
    if(mysqli_num_rows($r)>0){
        while($row=mysqli_fetch_assoc($r)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><a href="up.php?id=<?php echo $row['id'];?>">Update</a></td>
                <td><a href="de.php?id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php
        }}?>
</table>
