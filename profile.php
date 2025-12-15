<?php

    session_start();
    
    // print_r($_SESSION['mybook_user_id']);
    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");

    // check if user is logged in
    if(isset($_SESSION['mybook_user_id']) && is_numeric($_SESSION['mybook_user_id'])){

        $id = $_SESSION['mybook_user_id'];
        $login = new Login();

        $result = $login->check_login($id);

        if($result){

            // retrieve user data;
            $user = new User();

            $user_data = $user->get_data($id);

            if(!$user_data){
                header("Location: login.php");
                die;
            }
        }else{

        }
    }else{
        header("Location: login.php");
        die;
    }


// for posting(posting stasts here)
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $post = new Post();
        $id = $_SESSION['mybook_user_id'];
        $result = $post->create_post($id,$_POST);

        if($result == ""){

            header("Location: profile.php");
            die;
        }else{

            echo "<div style ='text-align:center; font-size:12px; color:white;background-color:grey;'>";
            echo "The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }

    }

// collect post

    $post = new Post();
    $id = $_SESSION['mybook_user_id'];

    $posts = $post->get_posts($id);  


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBook | Profile</title>
</head>

<style type="text/css">
    #blue_bar {
        height: 50px;
        background-color: #405d9d;
        color: #d9dfeb;
    }

    #search_box {
        width: 400px;
        height: 20px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        background-image: url(assest/search.png);
        background-repeat: no-repeat;
        background-position: right;
    }

    #profile_pic {
        width: 150px;
        margin-top: -200px;
        border-radius: 50%;
        border: solid 1px white;
    }

    #menu_button {
        width: 100px;
        display: inline-block;
        margin: 2px;
    }

    #fri_img {
        width: 75px;
        float: left;
        margin: 8px;

    }

    #friends_bar {
        background-color: white;
        min-height: 400px;
        margin-top: 20px;
        color: #aaa;
        padding: 8px;
    }

    #friends {
        clear: both;
        font-size: 12px;
        font-weight: bold;
        color: #405d9b;
    }

    textarea {
        width: 100%;
        border: none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        height: 60px;
    }

    #post_button {
        float: right;
        background-color: #405d9b;
        border: none;
        color: white;
        padding: 4px;
        font-size: 14px;
        border-radius: 2px;
        width: 50px;
    }

    #post_bar{
        margin-top: 20px;
        background-color: white;
        padding: 10px;
    }

    #post{
        padding: 4px;
        font-size: 13px;
        display: flex;
        margin: 20px;
    }
</style>

<body style="font-family:tahoma; background-color: #d0d8e4;">

    <!-- top bar  --><br>
    <div id="blue_bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            MyBook &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
            <img src="assest\selfie.jpg" style="width:50px; float:right;">

            <a href="logout.php">
            <span style="font-size: 11px; float: right; margin: 10px; color: white;">Logout</span>
            </a>
    </div>
    </div>

    <!-- cover area -->
    <div style="width: 800px; margin: auto; min-height: 400px;">

        <div style=" background-color: white; text-align: center; color:#405d9b;">

            <img src="assest\mountain.jpg" style=" width: 100%;">
            <img id="profile_pic" src="assest\selfie.jpg">
            <br>
            <div style=" font-size: 20px;"><?php echo $user_data['first_name'] . " " . $user_data['last_name']?></div>
            <br>
            <div id="menu_button"> Timeline </div>
            <div id="menu_button"> About </div>
            <div id="menu_button"> Friends </div>
            <div id="menu_button"> Photos </div>
            <div id="menu_button"> Settings </div>
        </div>

        <!-- below cover area -->
        <div style=" display: flex;">

            <!-- friends area  -->
            <div style="min-height: 400px; flex: 1;">
                <div id="friends_bar">
                    Friends<br>

                    <div id="friends">
                        <img src="assest\user1.jpg" id="fri_img">
                        <br>
                        First User
                    </div>

                    <div id="friends">
                        <img src="assest\user2.jpg" id="fri_img">
                        <br>
                        Second User
                    </div>

                    <div id="friends">
                        <img src="assest\user3.jpg" id="fri_img">
                        <br>
                        African Girl
                    </div>

                    <div id="friends">
                        <img src="assest\user4.jpg" id="fri_img">
                        <br>
                        African Dude
                    </div>
                </div>
            </div>

            <!-- posts area  -->
            <div style="min-height: 400px; flex: 2.5 ; padding: 20px; padding-right: 0px;">
                <div style=" border: solid thin #aaa; padding: 10px; background-color: white;">

                    <form method="post">

                        <textarea name = "post" placeholder="What's on your mind"></textarea>
                        <input id="post_button" type="submit" value="Post"><br>
                    </form>

                </div>

                <!-- posts -->
                <div id="post_bar">

                    <?php

                        if($posts){

                            foreach($posts as $row){

                                include("post.php");

                            }
                        }
                                          
                    ?>

                </div>
        </div>

    </div>


</body>

</html>