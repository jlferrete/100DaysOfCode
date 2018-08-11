<?php
include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Chat System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script>
    function ajax(){

        var req = new XMLHttpRequest();

        req.onreadystatechange = function()
        {
            if(req.readyState == 4 && req.status == 200)
            {
                document.getElementById('chat').innerHTML= req.responseText;
            }
        }
        req.open('GET','chat.php',true);
        req.send();
        
    }

    setInterval(function(){ajax()},1000);

    </script>
</head>
<body onload="ajax();">
    <div id="container">
        <div id="chat_box">
            <div id="chat"></div>
        </div>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="Escribe tu nick" />
            <textarea name="msg" id="msg" placeholder="Escribe tu mensaje" ></textarea>
            <input type="submit" name="submit" value="Enviar" />
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $msg = $_POST['msg'];    


        $query ="INSERT INTO chatEn (name,msg) values ('$name', '$msg')"; 

        $run = $con->query($query);

        if($run) {
            echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
        }
        
        }
        ?>
    </div>
    
</body>
</html>