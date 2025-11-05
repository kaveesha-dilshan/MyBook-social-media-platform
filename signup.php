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
        background-color: rgb(67, 67, 189);
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
        background-color: rgb(67,67, 189);
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
        <input type="text" id ="text" placeholder="First Name"><br><br>
        <input type="text" id ="text" placeholder="Last Name"><br><br>
        <span style="font-weight:normal;">Gender :</span> <br>
        <select id="text">
            <option>Male</option>
            <option>Female</option>
        </select><br><br>
        <input type="text" id ="text" placeholder="Email Address"><br><br>
        <input type="password" id = "text" placeholder="Passsword"><br><br>
        <input type="password" id = "text" placeholder="Re-type Passsword"><br><br>
        <input type="submit" id = "button" value="log in"><br><br>
    </div>

</body>
</html>