<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email ='$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        if(password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
            exit(); // Pastikan untuk mengakhiri eksekusi setelah pengalihan header
        }
        else{
            // Menampilkan pesan kesalahan menggunakan JavaScript
            echo "<script>alert('Password is incorrect')</script>";
        }
    }
    else{
        // Menampilkan pesan kesalahan menggunakan JavaScript
        echo "<script>alert('User not found!')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="icon" type="image/png" href="duajari.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #bdd2e8;
        }

        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            margin-bottom: 1rem;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #3481d1;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: 	#bdd2e8;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #3481d1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #bdd2e8;
        }
        .gbrn{
            position: fixed;
            bottom: 0;
            right: 0;
            height: 300px;

        }
        .praroro{
            position: fixed;
            bottom: 0;
            left: 0;
            height: 300px;
        }
        .audio{
            position: fixed;
            top: 200px;
        } canvas{
            position: fixed;

        }
        
    

    </style>
</head>
<body>
    
    <script type ="text/javascript" src="party.js"></script>
    <script type ="text/javascript">
        startConfetti();
    </script>

    <div class ="audio">
    <audio controls autoplay loop>
    <source src="OkGas.mp3" type="audio/mpeg" >
        GASSS!!!
    </audio></div>
    <img src="prabowo.png" class="praroro">
    <img src="gibran.png" class="gbrn">
    <form action="" method="post" autocomplete="off">
        <h2>Login </h2>
        <label for="usernameemail">Username or Email :</label>
        <input type="text" name="usernameemail" id="usernameemail" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit" name="submit">Login</button>

        <a href="Signup.php">Don't have an account? Register now!</a>
    </form>
    
</body>
</html>