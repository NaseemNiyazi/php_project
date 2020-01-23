    <html>
        <head>
            <title>
                
            </title>
        </head>
        <body>
            <?php
                $to = "abc2gmail.com";
                $sub = "Testing the mail service";
                $msg = "Hello we are just testing the mailging service for php";
                $from = "123@yaho0.com";

                mail($to,$sub,$msg,$from);

                echo "Email sended successfully !";
            ?>
        </body>
    </html>
?>