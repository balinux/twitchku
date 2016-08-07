<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">

                <script src= "http://player.twitch.tv/js/embed/v1.js"></script>
                <div id="{PLAYER_DIV_ID}"></div>
                <script type="text/javascript">
                    var options = {
                        width: 854,
                        height: 480,
                        channel: "{{$name}}",
                        //video: "{VIDEO_ID}"
                    };
                    var player = new Twitch.Player("{PLAYER_DIV_ID}", options);
                    player.setVolume(0.5);
                </script>

            </div>
        </div>
    </body>
</html>
