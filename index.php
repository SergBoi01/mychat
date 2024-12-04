<!DOCTYPE html>
<html>
<head>
    <title>Super cool </title>
</head>

<style type="text/css">

    @font-face {
        font-family: headFont;
        src: url(ui/fonts/Summer-Vibes-OTF.otf);
    }
    @font-face {
        font-family: myFont;
        src: url(ui/fonts/OpenSans-Regular.ttf);
    }

    #wrapper {
        max-width: 900px;
        min-height: 500px;
        display: flex;
        margin: auto;
        color: white;
        font-family: myFont;
        font-size: 13px;
    }
    #left_panel {
        min-height: 500px;
        background-color: #27344b;
        flex: 1;
        text-align: center;
    }
    #profile_image {
        width: 50%;
        border-radius: 50%;
        margin: 10px;
        border: solid thin white;    
    }
    #left_panel label {
        width: 100%;
        height: 20px;
        display: block;
        background-color: #404b56;
        border-bottom: solid thin #ffffff55;
        cursor: pointer;
        padding: 5px;
    }
    #left_panel label:hover {
        background-color: #778593;
    }
    #left_panel label img {
        float: right;
        width: 25px;
    }
    #right_panel {
        min-height: 500px;
        flex: 4;
    }
    #header {
        height: 70px;
        background-color: #485b6c;
        font-size: 40px;
        font-family: headFont;
        text-align: center;
    }
    #inner_left_panel {
        min-height: 430px;
        background-color: #383e48;
        flex: 1;
        text-align: center;
    }
    #inner_right_panel {
        min-height: 430px;
        background-color: #f2f7f8;
        flex: 2;
    }
    
</style>

<body>
    <div id="wrapper">

        <div id="left_panel">

            <div style="padding:10px">
                <img id="profile_image" src="ui/images/user3.jpg">
                <br>
                Kelly Hartmann
                <br>
                <span style="font-size:12px;opacity:0.5">kellyhartmann@gmail.com</span>
                <br>
                <br>
                <br>
                <div>
                    <label for="box">Chat<img src="ui/icons/chat.png"></label>
                    <label>Contacts<img src="ui/icons/contacts.png"></label>
                    <label>Settings<img src="ui/icons/settings.png"></label>
                </div>
            </div>
        </div>

        <div id="right_panel">

            <div id="header">My App</div>
            <div id="container" style="display: flex;">

                <div id="inner_left_panel">
                    <input type ="checkbox" id="box" name="">
                </div>                
                <div id="inner_right_panel"></div>

            </div>
        </div>
    </div>
</body>
</html>