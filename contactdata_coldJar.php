<?php
session_start();
include("orderdb.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $firstname= $_POST['Name'];
            $num=$_POST['Monumber'];
            $address= $_POST['Address'];
            $Message= $_POST['Message'];




            if($firstname==TRUE)
            {
                $query = ("INSERT INTO `data`( `Name`, `Monumber`, `Address`, `Message`) VALUES ('$firstname','$num','$address','$Message')");

                mysqli_query($con, $query);

                echo "<script type='text/javascript'> alert('Sucessfully Save ')</script>";
            }

            else
            {
                 echo "<script type='text/javascript'> alert('Enter the valid details/Informations ')</script>";

            }
            


}
       






?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gs1.css">
    <title>Contact Information</title>
</head>
<body>
    <form method="POST">
    <div class="login-box">
        <div class="login-header">
            <header>contact form Cold Jar</header>
        </div>
<form method="POST">
        <div class="input-box">
            <input type="Name"  name="Name" class="input-field" placeholder="Enter your name" autocomplete="off" required>
        </div>
        <!-- <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" autocomplete="off" required>
        </div> -->
        <div class="input-box">
            <input type="text"  name="Monumber" class="input-field" placeholder="Mobile number" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="Address" name="Address" class="input-field" placeholder=" Enter your Address" required>
    </div>
   <div class="input-box">
           <textarea  name="Message" placeholder=" Your order Info" cols="55" rows="5"></textarea>
    </div>
       
       
            
        <!-- </div> -->
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit" action="">Submit</label>
           <center><a href="upi.png ">Pay Now !</a></center>
            <!-- <button class="submit" id="xyz"></button>
            <label for="xyz">Make a Payment <a href="qr.html"></a></label> -->
        </div>
        <div class="sign-up-link">
            <!-- <p>I have account! <a href="in.php">sign In?</a></p> -->
        </div>
    </div>
</form>
</body>
</html>