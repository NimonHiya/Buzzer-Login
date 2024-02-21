<?php
    require 'config.php';
    if (!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        $result = mysqli_query($conn,"SELECT * FROM tb_user WHERE id= $id ");
        $row = mysqli_fetch_array($result);


    }
        else{
            header("location:Login.php");
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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

        h1 {
            font-size: 2.5rem;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            text-align: center;
            margin-bottom: 1rem;
        }

        a {
            position: relative;
            display: inline-block;
            background-color: #3481d1;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
            
            
            
        }

        a:hover {
            background-color: #bdd2e8;
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

        }.mydiv {
        position: fixed;
        width:100%;
        height:100%;
        color:black;
        font-weight:bold;
        animation: myanimation 1s infinite;
}

@keyframes myanimation {
    0% {background-color: red;}
    25% {background-color: yellow;}
    50% {background-color: green;}
    75% {background-color: brown;}
    100% {background-color: red;}
   
}

    </style>
</head>
<body>
</div>
    <script type ="text/javascript" src="party.js"></script>
        <script type ="text/javascript">
            startConfetti();
    </script>

    <div class="mydiv"></div>


    <div class ="audio">
        <audio controls autoplay loop>
        <source src="OkGas.mp3" type="audio/mpeg" >
        GASSS!!!
    </audio></div>
    <img src="prabowo.png" class="praroro">
    <img src="gibran.png" class="gbrn">

    <div class="container">
        <marquee ><h1> Welcome Buzzer Kita <?php echo $row['username']; ?></h1></marquee>
        <a href="Logout.php">Logout</a>
    
</body>
</html>