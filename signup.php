<?php
session_start();
include("db.php");  

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       
        $firstname= $_POST['fname'];
        $lastname= $_POST['lname'];
        $Gender= $_POST['gender'];
        $num= $_POST['number'];
        $address= $_POST['add'];
        $gmail= $_POST['mail'];
        $password= $_POST['pass'];
       

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query =("INSERT INTO `form`( `fname`, `lname`, `gender`, `number`, `add`, `mail`, `pass`) VALUES ('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')");

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Sucessfully Register ')</script>";
        }

        else
        {
            echo "<script type='text/javascript'> alert('Enter the valid details/Informations ')</script>";

        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Login and Register</title>
    <link rel="stylesheet" href="signup.css">
    
        
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It's fress and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <lable>Last Name</lable>
            <input type="text" name="lname" required>
            <lable>Gender</lable>
            <input type="text" name="gender" required>
            <lable>Contact Address</lable>
            <input type="tel" name="number" required>
            <lable>Address</lable>
            <input type="text" name="add" required>
            <lable>Email</lable>
            <input type="email" name="mail" required>
            <lable>Password</lable>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">

        </form>
        <p>Alredy have an account?<a href="login.php">&nbsp;Login Here</a></p>
    </div>
    
</body>
</html>