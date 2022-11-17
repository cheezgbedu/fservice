
<?php 
include "include/connect.php";
$error = "";
if (isset($_POST['submit'])) {
    $fname = htmlspecialchars($_POST['firstname']);
    $lname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $method = htmlspecialchars($_POST['method']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $comment = htmlspecialchars($_POST['comment']);

    $image1 = $_FILES['img1']['name'];
    $image2 = $_FILES['img2']['name'];
    $image3 = $_FILES['img3']['name'];

    $temp_image1 = $_FILES['img1']['tmp_name'];
    $temp_image2 = $_FILES['img2']['tmp_name'];
    $temp_image3 = $_FILES['img3']['tmp_name'];

    if (empty($fname) || empty($lname) || empty($email)||empty($method) || empty($address) ||empty($city)) {
        echo "<script> alert('fill all required fields') </script>";
    }else{
        move_uploaded_file($temp_image1,"admin/images/$image1");
        move_uploaded_file($temp_image2,"admin/images/$image2");
        move_uploaded_file($temp_image3,"admin/images/$image3");
        $insert_sql = "insert into `users` (firstname,lastname,email,phone,mode,address,city,comment,image1,image2,image3,date) value('$fname', '$lname', '$email',$phone, '$method', '$address', '$city', '$comment', '$image1', '$image2', '$image3',Now())";
        $sql = mysqli_query($con,$insert_sql);
        if ($sql) {
            echo "Your application has been received";
        }else{
            die(mysqli_error($con));
        }

    }
    
    
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet/form.css">
</head>
<body>
    <?php
    include('')
    ?>
<div class="form-section">
    <h2>Schedule your free Inspection</h2>
    <p>Complete the form below to schedule</p>
    <form action="" method="post" enctype="multipart/form-data">
        <label class="required">First Name:</label><br>
        <input type="text" placeholder="enter your first name" name="firstname"><br><br/>
        <label class="required">Last Name:</label><br>
        <input type="text" placeholder="enter your lastname" name="lastname"><br><br/>
        <label class="required">Email :</label><br>
        <input type="text" placeholder="enter your email address" name="email"><br><br/>
        <label class="required">Phone :</label><br>
        <input type="text" name="phone"><br><br/>

        <label for="">Method of Communication</label><br>
        <select name="method" id="select">
                <option>Text</option>
                <option>Email</option>
                <option>Phone</option>
            </select><br><br>
        <!-- <div class="method">
            <label class="required" for="met">Preferred Method of Communication:</label><br><br/>
        
            <input type="radio" name="text" id="met" value="text">
            <label for="met">&nbsp;Texts</label><br>
            <input type="radio" name="email" id="met" value="email">
            <label for="email">Email</label><br>
            <input type="radio" name="phone" value="Phone">
            <label for="phone">Phone</label><br><br/>
            
           
        </div> -->
        

        <label class="required">Address:</label><br>
        <input type="text" name="address"><br><br/>
        
        <label class="required">City:</label><br>
        <input type="text" name="city"><br><br/>
        <label>Comments and Concerns:</label><br>
        <textarea rows="4"cols="50" name="comment"></textarea><br><br/>
        <label>Please upload phots of the area:</label><br><br/>
        <input type="file" name="img1" accept="image/*"><br><br/>
        <input type="file" name="img2" accept="image/*"><br><br/>
        <input type="file" name="img3" accept="image/*"><br><br/>
        <input type="submit" name="submit">



    </form>
</div>
</body>
</html>

