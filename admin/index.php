<?php  
include "../include/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
    }
    table{
        width:100%;
        border: 1px solid black;
        padding:20px;
    }
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
img{
    display:block;
    margin:auto;
    width:100px;
    height:100px;
    object-fit:contain;
}
</style>

<body>
    <h1>Bookings</h1>
        <table>
            <tr>
            
                <th>S/N</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Mode</th>
                <th>Address</th>
                <th>City</th>
                <th>Comments</th>
                <th>Photo 1</th>
                <th>Photo 2</th>
                <th>Photo 3</th>
                <th>Date</th>
            
</tr>
            
                <?php
                $sql = "select * from users ORDER BY date DESC";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $fname = $row['firstname'];
                    $lname = $row['lastname'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $mode = $row['mode'];
                    $address = $row['address'];
                    $city = $row['city'];
                    $comment = $row['comment'];
                    $image1 = $row['image1'];
                    $image2 = $row['image2'];
                    $image3 = $row['image3'];
                    $date = $row['date'];

                   
                    echo "
                    <tr>
                    <td> $id </td>
                    <td> $fname </td>
                    <td> $lname </td>
                    <td> $email </td>
                    <td> $phone </td>
                    <td> $mode </td>
                    <td> $address </td>
                    <td> $city </td>
                    <td> $comment </td>
                    <td> <img src='images/$image1'> </td>
                    <td> <img src='images/$image2'> </td>
                    <td> <img src='images/$image3'> </td>
                    <td> $date</td>

                    </tr>
                    ";
                 }
                ?>
            
        </table>
    
</body>
</html>