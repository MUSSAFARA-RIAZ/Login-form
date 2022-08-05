<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;500;700;800&family=Edu+NSW+ACT+Foundation&family=Grape+Nuts&family=Inter&family=Montserrat:ital,wght@0,200;1,400&family=PT+Sans&family=Poppins:wght@100&family=Tajawal:wght@200&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        #container{
      
            max-width: 80%;
            margin: auto;
            padding: 17px;


        }
        #container h1,p{
            text-align: center;
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
        input,textarea{
          width: 80%;
            padding: 5px;
            border-radius: 10px;
            margin: 8px;
            border: 2px solid black;
            outline: none;
        }
        button{
            width: 100px;
            margin: auto;
            background-color: purple;
            cursor: pointer;
            color: white;
            border: 2px solid white;
            padding: 7px;
            border-radius: 10px;

        }

        form{
            max-width: 100%;
            display: flex;
            flex-direction: column;
           justify-content: center;
            align-items: center;
          

        }
        img{
            width: 100%;
         height: 100%;

            position: absolute;
            opacity: 0.6;
            z-index: -1;
        }
        #con{
            color: green;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <img src="thar_campus.jpg" alt="">
    <div id="container">
        <h1>Welcome to NED University Study Trip</h1>
        <p>Enter you details to confirm your participation</p>
        
        <p id="con">Thank You For Submitting the form</p>
        <form  method="post">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="age" placeholder="Enter Your Age">
            <input type="email" name="email"  placeholder="Enter your email">
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Enter your phonenumber">
            <input type="text" name="gender" placeholder="Enter your gender">
            <textarea name="desc" id="desc" placeholder="Enter your description"  cols="30" rows="10"></textarea>
            <button type="submit" name="submit">Submit</button>
            

        </form>
    </div>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'trip';
    $conn = mysqli_connect($server, $user, $password, $db_name);
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $desc = $_POST['desc'];

    $qu = "INSERT INTO `trip`.`ned-trip` ( `name`, `age`, `email`, `phonenumber`, `gender`, `other`) VALUES ('$name', '$age', '$email', '$phonenumber', '$gender', '$desc');";
    $res = mysqli_query($conn, $qu);
    if ($res) {
        echo 'success';
    } else {
        echo 'failed';
    }
} ?>