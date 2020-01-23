<!DOCTYPE html> 

<?php
    $connect = mysqli_connect("localhost","root","","university") or die("<h1 style='font-family:verdana'>connection not estabished</h1>");
?>

<html>
    <head>
        <title>
            php data base connectivity
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-offset-2 col-md-2"></div>
            <div class="col-md-3" style="margin-top:100px">

            <form action="form.php" method="post">
                <input type="text" name=" name"  placeholder="Enter Name">
                <br/>
                <input type="password" name="password"  placeholder="Enter password" />
                <br/>
                <input type="text" name="email"  placeholder="Enter Email" />
                <br/>
                <input type="submit"  name="submit">
            </form>


            <?php

                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];

                    $insert = "insert into students (name,password,email) value('$name','$password','$email')";
                    
                    $run = mysqli_query($connect, $insert);


                    if($run){
                        echo "<h1 style='font-family:verdana'>Data inserted</h1>";
                    }
                }

            ?>

               
                    <table class="table" style="margin-top:100px">
                        <thead>
                            <tr>
                                <th scope="col">SNo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">ID</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                            </tr>
                            <?php
                                $select = "select * from students";

                                $run = mysqli_query($connect, $select);
                                $i = 0;
                                while($row = mysqli_fetch_array($run)){
                                    $user_id = $row['id'];
                                    $user_name = $row['name'];
                                    $user_password = $row['password'];
                                    $user_email = $row['email'];
                              $i++;  
                            ?>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $i ?></th>
                                <td><?php echo $user_name ?></td>
                                <td><?php echo $user_password ?></td>
                                <td><?php echo $user_email ?></td>
                                <td><?php echo $user_id ?></td>
                                <td><a href="form.php?delete=<?php echo $user_id; ?>"><button class="btn btn-sm btn-danger">Delete</button> </a></td>
                                <td><a href="form.php?edit=<?php echo $user_id; ?>"><button class="btn btn-sm btn-success">Edit</button> </a></td>
                            </tr>

                       
                        <?php
                                }
                        ?>
                        </tbody>
                    </table>
                    
                                <?php
                                    if(isset($_GET['edit'])){
                                        include("edit.php");
                                    }
                                ?>

                    <?php
                        if(isset($_GET['delete'])){
                            $delete_id = $_GET['delete'];

                            $delete = "delete from students where id='$delete_id'";

                            $run_delete = mysqli_query($connect, $delete);

                            if($run_delete){
                                echo "<h1 style='font-family:verdana'>A record is being updated Refresh the page please</h1>";
                                echo "<script>window.open('form.php','_self')</script>";
                            }
                        }
                    ?>
            </div>
        </div>
    </body>
</html>