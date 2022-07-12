<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="window">
        <div class="header">
            <h2>ChatApp</h1>
        </div>

        <div class="messages">

            <div class="messagebox">
                <div class="message">
                    <div class="sender">Roberts</div>
                    <div class="text">First message</div>
                    <div class="date">11/07/2022 20:00</div>
                </div>
            </div>

            <div class="messagebox-self">
                <div class="message-self">
                    <div class="sender">Roberts</div>
                    <div class="text">First message</div>
                    <div class="date">11/07/2022 20:00</div>
                </div>
            </div>

        </div>

        <div class="type">
            <input type="text" class="input">
            <input type="button" value=">>>" class="send">
        </div>

    </div>
</body>
</html>