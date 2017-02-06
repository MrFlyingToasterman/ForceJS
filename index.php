<!DOCTYPE html>
<!--
GPLv3
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ForceJS</title>
    </head>
    
    <script type="text/javascript">
        
        function Handbreak() { 
            //fixes the loop issue
            var now = new Date();
            var time = now.getTime();
            var expireTime = time + 1000;
            now.setTime(expireTime);
            document.cookie = 'cookie=cooldown;expires='+now.toGMTString()+';path=/';
        }
        
        //window.onload = function(){
        function autostartAgent() { 
            
            var isset = document.cookie.indexOf("cooldown");
            
            if (isset == -1) {
                Handbreak();
                document.getElementById('inconspicuous').value = "TRUE";
                document.getElementById('autoclick').click();
            }
            
        }//;

    </script>
    
    <style>
        
        body {
            background-color: snow;
        }
        p {
            margin-top: 15%;
        }
        
    </style>
    
    <body onload="autostartAgent();">
        
        <form method="POST" action="index.php" name="form0">
            
            <input type="hidden" name="inconspicuous" id="inconspicuous" value="FALSE">
            <input type="submit" id="autoclick" style="display: none;">
            
        </form>
        
        <center>
        
            <?php
                if (isset($_POST["inconspicuous"])) {
                    
                    if ($_POST["inconspicuous"] != "TRUE") {
                        echo "<p style=\"color: red;\">PLEASE ENABLE JAVASCRIPT!</p>";
                        die();
                    }

                    echo "<p style=\"color: green;\"> Welcome on my webside!<br>You are Forced to use JavaScript!</p>";  
                    unset($var);
                    
                }else {

                    echo "<p style=\"color: red;\">PLEASE ENABLE JAVASCRIPT!</p>";
                    
                }
            ?>
            
        </center>
    </body>
</html>