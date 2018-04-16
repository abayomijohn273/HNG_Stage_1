
<!doctype html>
<html>
    <head>
    <title>HNG Internship Project for Stage 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="U-XA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <style type="text/css">
            * {
               font-family: "Open Sans", sans-serif;
               font-style: normal;
               font-weight: bold;
               line-height: normal;
                
            }
            body { 
            position: relative;
            background: url("bg.png") fixed no-repeat;
            background-size: cover;
            }
            h1{
                position: absolute;
                left: 30%;
                top: 230px;

                font-size: 64px;
                color: #2F80ED;
            }
            p{
                position: absolute;
                width: 580px;
                height: 54px;
                left: 28%;
                top: 350px;
                line-height: 1.4em;
                font-size: 16px;
                text-align: center;
                color: #E33636;
            }
            a{
                position: absolute;
                left: 40%;
                top: 450px;
                background: #B71515;
                border-radius: 12px;
                padding: 12px 50px;
                color: #F2F2F2;
                text-decoration: none;
            }
            .date {
            position: absolute;
            left: 99px;
            top: 560px;
            font-size: 56px;
            color: #F2F2F2;
            }
        </style>
    </head>
    
    <body>
        <h1>Olatunji Abayomi</h1>
        <p>I am a Web Developer based in Lagos, Nigeria with few years of experience in HTML, BOOTSTRAP, CSS, JAVASCRIPT, PHP, MYSQL.<br> I am glad and it’s a privilege to be participate in HNG Internship 4</p>
        <a href=""><span class="link">CLICK TO CONNECT</span></a>
        <?php
        echo "<span class='date'> ". date("h:i")." ".strtoupper(date("a"))."</span>";
        ?>
    </body>
</html>
