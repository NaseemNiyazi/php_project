<html>
    <head>
        <title>
            Fillter In Php
        </title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="url">
            <input type="text" name="email">
            <input type="submit" value="submit" name="sub">
        </form>
        
        <?php
            if(isset($_POST['sub'])){
                $url = $_POST['url'];
               
                if(filter_var($url, FILTER_VALIDATE_URL)){
                    echo "<h3>The url is valid</h3>";
                }
                else
                {
                    echo "<h3>The url is not valid</h3>";
                }
               
            }
        ?>
            <?php

                if(isset($_POST['sub'])){

                $email= $_POST['email'];

    
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "<h3>The email is valid</h3>";
                }
                else
                {
                    echo "<h3>The email is not valid</h3>";
                }
            }
            ?>
    </body>
</html>