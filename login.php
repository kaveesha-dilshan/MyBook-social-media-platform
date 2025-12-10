<?php

session_start();
    include("classes/connect.php");
    include("classes/login.php");

    $password = "";
    $email = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    $login = new Login();
    $result = $login->evaluate($_POST);

    if($result != ""){
        
        echo "<div style ='text-align: center; font-size:12px; color:white;background-color:grey;'>";
        echo "The following errors occured:<br><br>";
        echo $result;
        echo "</div>";
    }else{
        header("Location: profile.php");
        die;
    }
    

        $password = $_POST['password'];
        $email = $_POST['email'];

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Mybook | Log in</title>
</head>
<style>
    #bar{
        height: 100px;
        background-color: #405d9b;
        color: aliceblue;
        padding: 4px;
    }

    #signup_button{
        background-color: green;
        width: 70px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        float: right;

    }

    #log{
        background-color: white;
        width: 800px;
        margin: auto;
        margin-top: 50px;
        text-align: center;
        padding: 50px;
        font-weight: bold;
    }

    #text{
        height: 35px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
    }

    #button{
        background-color: #405d9b;
        width: 310px;
        height: 45px;
        border-radius: 4px;
        font-weight: bold;
        border: none;
        color: white;
    }
</style>

<body style="font-family : tahoma; background-color : #D3D3D3">

    <div id = "bar">
        <div style="font-size: 40px;"> MyBook </div>
        <div id = "signup_button"> Signup </div>
    </div>

    <div id = "log">
        <form method = "post" autocomplete="off" id="loginForm" >

            Log in to MyBook<br><br>

            <input name="email" value= "<?php echo $email ?>" type="text" id ="text" placeholder="Email Address"><br><br>
            <input name="password" value= "<?php echo $password ?>" type="password" id = "text" placeholder="Passsword"><br><br>

            <input type="submit" id = "button" value="log in"><br><br>

        </form>
    </div>

</body>
</html>