<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ILLUMINATE</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            html, body {
                background-image: url("assets/images/illuminate.jpeg");
                color: #f70202;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: 1000;
                text-shadow: 4px 4px 9px #000000;
            }

            .links > a {
                color: #f70202;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <!-- <a href="/">Home</a>
                <a href="/about">About</a> -->
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Sunarc Technologies
                </div>

                <div class="links">
                    <a href="http://sunarctechnologies.com/">Website</a>
                    <a href="https://www.instagram.com/sunarctech/">Instagram</a>
                    <a href="https://twitter.com/SunArc_tech">Twitter</a>
                    <a href="https://www.youtube.com/user/sunarctechnologies">YouTube</a>
                </div>
            </div>
        </div>
    </body>
</html>
