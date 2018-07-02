<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lets Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    /*ไว้ link จากหน้าเมนูเว็บ*/
    @session_start();
    include('config.php');
    if(isset($_SESSION['Name'])) {}

    ?>
    <style>
        /*body {
            background: url('image.png') no-repeat fixed center center;
            background-size: cover;
        }*/
        *{margin:0px; padding:0px;font-family: Helvetica, Arial, sans-serif;}
        #logout{width:60px; height:20px; position:absolute; top:6px; right:20px; margin-bottom:40px; text-align:center; color:#fff}
        #container{width:75%; height:auto; position:relative; top:8px; margin:auto;}

        #session-name{width:100%; height:36px; margin-bottom:30px; font-size:20px}
        .session-text{width:300px; height:30px;padding:6px 10px;margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box; font-size:24px}

        #result-wrapper{width:100%; margin:auto; height:450px;}
        #result{height:450px; overflow: auto; word-wrap: break-word;} /**/

        #form-container{width:100%; margin:auto; height:80px;}
        .form-text{float:left; width:70%; height:80px;}
        #comment{width:100%; height:79px; resize:none;}
        .form-btn{float:left; width:15%; height:80px;}
        #btn{float:left; border:none; height:80px; width:100%; background:tomato; color:#fff; font-size:22px}
        #bek{float:left; border:none; height:80px; width:100%; background:grey; color:#fff; font-size:14px}
        .chats{width:100%; margin-bottom:10px;}
        .chats strong{color:#6d84b4}
        .chats p{ font-size:14px; color:#aaa; margin-right:10px}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $(document).bind('keypress', function(e) {
                if(e.keyCode==13){
                    $('#my_form').submit();
                    $('#comment').val("");
                }
            });
        });
    </script>

    <script>

        var i=0,k=0,p;
        var m;
        function ku1()
        {

            i++;
            if((i%2)!=0){k=1;} //เปิดปุ่ม
            else{k=0;}
            if(k==1)
            {
                m = document.getElementById("bek");
                m.style.color="red";
            }
            else {m.style.color="white";}
            myFunction();
        }
    </script>

    <script>
        function post()
        {
            var comment = document.getElementById("comment").value;
            var name = document.getElementById("username").value;
            //var k = x;
            if(k==1){p="anonymous";}
            else{p=name;}

            if(comment && name)
            {
                $.ajax
                ({
                    type: 'post',
                    url: 'S_chatbox_commentajax.php',
                    data:
                        {
                            user_comm:comment,
                            user_name:name,
                            abcd_name:p
                        },
                    success: function (response)
                    {
                        document.getElementById("comment").value="";
                    }
                });

            }
            return false;
            myfunction();
        }
    </script>

    <script>
        function autoRefresh_div()
        {
            $("#result").load("S_chatbox_load.php").show();
            // a function which will load data from other file after x seconds
        }
        setInterval('autoRefresh_div()', 2000);
    </script>

</head>

<body>


<div id="container">

    <div id="session-name">

        Your Name: <input type="text" value="<?= $_SESSION['Name'] ?>" class="session-text" disabled></div>

    <div id="result-wrapper">
        <div id="result">
            <?php
            include("S_chatbox_load.php");
            ?>
        </div>
    </div>

    <html>
    <body>
    <form method='post' action="#" onsubmit="return post();" id="my_form" name="my_form">
        <div id="form-container">
            <div class="form-text">
                <input type="text" style="display:none" id="username" value="<?= $_SESSION['Name'] ?>">
                <textarea id="comment" autofocus></textarea>
            </div>
            <div class="form-btn">
                <input type="submit" value="Send" id="btn" name="btn" >
            </div>
            <div class="form-btn">
                <button onclick="ku1()" id="bek">ANONYMOUS</button>
            </div>
        </div>
    </body>

    <head>
        <script>
            function myFunction()
            {
                var q = 20000;
                window.result.scrollTo(0,q);
                q = q+20;
            }

        </script>


    </head>

    </html>

    <?php session_write_close(); ?>
