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
        
        window.onload = function(){
            
            document.getElementById('autoclick').value = "true";
            var button = document.getElementById('autoclick');
            button.form.submit();
            
        };

    </script>
    
    <style>
        
        body {
            background-color: snow;
        }
        p {
            margin-top: 15%;
        }
        
    </style>
    
    <body>
        
        <form method="POST" action="index.php" name="form0">
            
            <input type="hidden" name="inconspicuous" id="inconspicuous" value="false">
            <input type="submit" id="autoclick" style="display: none;">
            
        </form>
        
        <center>
        
            <?php
                if (isset($_POST["inconspicuous"])) {

                    echo "<p style=\"color: green;\"> Welcome on my webside!<br>You are Forced to use JavaScript!</p>";  

                }else {

                    echo "<p style=\"color: red;\">PLEASE ENABLE JAVASCRIPT!</p>";

                }
            ?>
            
        </center>
            
    </body>
</html>