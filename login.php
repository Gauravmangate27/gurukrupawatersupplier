<?php
session_start();
include("db.php");  
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail= $_POST['mail'];
        $password= $_POST['pass'];
        



        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
         // $query=  "SELECT `Id`, `fname`, `lname`, `gender`, `number`, `add`, `mail`, `pass` FROM `form` WHERE 1";
            $query = "select * from form where  mail = '$gmail' limit 1";
            $result= mysqli_query($con,$query);
            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['pass']==$password)
                    {
                        header("location: index1.php");
                        die;

                    }
                }
            }
              echo "<script type='text/javascript'> alert('wrong username or Password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('')</script>";
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

    <div class="login">
        <h1>Login</h1>
       
        <form method="POST">
             <lable>Email</lable>
            <input type="email" name="mail" required>
            <lable>Password</lable>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">

        </form>
        <p>Not have an account?<a href="signup.php">&nbsp;sign-up Here</a></p>
    
</body>
</html>