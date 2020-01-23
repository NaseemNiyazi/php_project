<html>
    <head>
        <title>
            php image upload
        </title>
    </head>
    <body>
       <form action="image.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" name="upload" value="submit-image">
        </form>

        <?php
            if(isset($_POST['upload'])){

                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];

                move_uploaded_file($image_tmp, "images/$image");

                echo "<img src='images/$image' height='500' width='500' />";
            }
        ?>
    </body>
</html>