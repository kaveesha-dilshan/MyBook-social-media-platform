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
        padding: 8px;
        text-align: center;
        font-size: 20px;
        color: #405d9b;
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
        </div>
    </div>

    <!-- cover area -->
    <div style="width: 800px; margin: auto; min-height: 400px;">

        <!-- below cover area -->
        <div style=" display: flex;">

            <!-- friends area  -->
            <div style="min-height: 400px; flex: 1;">
                <div id="friends_bar">

                    <img id="profile_pic" src="assest\selfie.jpg"><br>
                    Mary Banda
                </div>
            </div>

            <!-- posts area  -->
            <div style="min-height: 400px; flex: 2.5 ; padding: 20px; padding-right: 0px;">
                <div style=" border: solid thin #aaa; padding: 10px; background-color: white;">
                    <textarea placeholder="What's on your mind"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </div>

                <!-- posts -->
                <div id="post_bar">

                    <!-- post 01 -->
                    <div id="post">
                        <div>
                            <img src="assest\user1.jpg" style="width: 75px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style=" font-weight: bold; color: #405d9b;">First Guy</div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.
                            <br/><br/>

                            <a href="">Like</a> . <a href="">Comment</a> . <span style=" color: #999;">April 23 2020</span>

                        </div>
                    </div>

                     <!-- post 02 -->
                    <div id="post">
                        <div>
                            <img src="assest\user4.jpg" style="width: 75px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style=" font-weight: bold; color: #405d9b;">African Dude</div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.
                            <br/><br/>

                            <a href="">Like</a> . <a href="">Comment</a> . <span style=" color: #999;">April 23 2020</span>

                        </div>
                    </div>

                </div>
        </div>

    </div>


</body>

</html>