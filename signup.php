<?php

    include("classes/connect.php");
    include("classes/signup.php");

    $first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    $signup = new Signup();
    $result = $signup->evaluate($_POST);

    if($result != ""){
        
        echo "<div style ='text-align: center; font-size:12px; color:white;background-color:grey;'>";
        echo "The following errors occured:<br><br>";
        echo $result;
        echo "</div>";
    }
    

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Mybook | Sign up</title>
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
        <div id = "signup_button"> Log in </div>
    </div>

    <div id = "log">
        Sign up to MyBook<br><br>

        <form method="post" action="">

            <input value = "<?php echo $first_name ?>" name = "first_name" type="text" id ="text" placeholder="First Name"><br><br>
            <input value = "<?php echo $last_name ?>" name = "last_name" type="text" id ="text" placeholder="Last Name"><br><br>

            <span style="font-weight:normal;">Gender :</span> <br>
            <select id="text" name = "gender">
                <option><?php echo $gender ?></option>
                <option>Male</option>
                <option>Female</option>

            </select>
            <br><br>
            <input name = "email"type="text" id ="text" placeholder="Email Address"><br><br>
            
            <input name = "password"type="password" id = "text" placeholder="Passsword"><br><br>
            <input name = "password1"type="password" id = "text" placeholder="Re-type Passsword"><br><br>

            <input type="submit" id = "button" value="Sign up"><br><br>

        </form>
    </div>

</body>
</html>