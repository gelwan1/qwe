<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script>
            function zmc()
            {
                document.body.style.backgroundColor = "#4B4B4B";
                document.getElementById("box").style.backgroundColor = "#303030";
                document.getElementById("box").style.borderColor = "#F3D32A";
                document.getElementById("text").style.backgroundColor = "#696969";
                document.getElementById("text").style.color = "#DADADA";
                document.getElementById("title").style.color = "#F3D32A";
                document.getElementById("button").style.backgroundColor = "#F3D32A";
                document.getElementById("button").style.color = "#303030";

                document.getElementById("button").setAttribute("onclick","zmcqwe()");
            }
            function zmcqwe()
            {
                document.body.style.backgroundColor = "whitesmoke";
                document.getElementById("box").style.backgroundColor = "cecbcb";
                document.getElementById("box").style.borderColor = "tomato";
                document.getElementById("text").style.backgroundColor = "rgb(184, 184, 184)";
                document.getElementById("text").style.color = "black";
                document.getElementById("title").style.color = "tomato";
                document.getElementById("button").style.backgroundColor = "tomato";
                document.getElementById("button").style.color = "whitesmoke";

                document.getElementById("button").setAttribute("onclick","zmc()");
            }
        </script>
        <style>
            body
            {
                margin: 0;
                background-color: whitesmoke;
                font-family: 'Roboto', sans-serif;
                transition: 0.5s;
            }
            #box
            {
                width: 70%;
                height: 100vh;
                background-color: #cecbcb;
                margin: auto;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-left: 5px solid;
                border-right: 5px solid;
                border-color: tomato;
                transition: 0.5s;
            }
            p
            {
                width: 75%;
                font-size: 23px;
                line-height: 40px;
                margin-top: 100px;
                padding: 35px;
                background-color: rgb(184, 184, 184);
                transition: 0.5s;
                border-radius: 9px;
            }
            h1
            {
                font-size: 50px;
                margin-top: 100px;
                color: tomato;
                transition: 0.5s;
            }
            button
            {
                margin-top: 60px;
                background-color: tomato;
                border: unset;
                width: 220px;
                height: 50px;
                border: unset;
                border-radius: 25px;
                color: whitesmoke;
                font-size: 20px;
                transition: 0.5s;
                font-weight: bold;
            }
            button:focus
            {
                outline: unset;
            }
            button:hover
            {
                transform: scale(1.2);
            }
        </style>
    </head>
    <body>
        <div id="box">
            <button id="button" onclick="zmc()">Zmiana kolorystyki</button>
            <h1 id="title">Zmiana kolorystyki na stronie internetowej</h1>
            <p id="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Duis et nunc tellus. Quisque interdum, sapien at vestibulum suscipit, 
                justo erat consectetur augue, vel dictum augue odio ut mi. 
                Praesent bibendum sodales sapien, eu rhoncus est suscipit sed. 
                Vestibulum eget dolor erat. Vestibulum sed erat ut orci euismod dictum. 
                Aliquam sagittis laoreet elit, at iaculis lacus vehicula eu. 
                Duis enim leo, luctus eu metus eget, efficitur facilisis orci. 
                Cras porta quis ligula sit amet consectetur. 
                Ut faucibus purus eu lectus ornare, at suscipit quam elementum. 
                Donec ut tincidunt dolor. Pellentesque et felis eros. 
                Curabitur volutpat pharetra ligula ut porttitor.
            </p>
        </div>
    </body>
</html>