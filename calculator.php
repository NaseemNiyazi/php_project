<html>
    <head>
        <title>
            calculator with php
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body style="font-family:verdana; margin:400px; background-color: #000000; background-image: linear-gradient(147deg, #000000 0%, #04619f 74%); color:white; margin-left:500px">
        <form action="calculator.php" method="post">
            <label for="value1">Value 1:</label>
            <input type="text" name="value1" size:"10" placeholder="Enter value">
            <label for="value2">Value 2:</label>
            <input type="text" name="value2" size:"10" placeholder="Enter value">
            <select name="operator">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>

            <input type="submit" name="cal" value="calculate">
            
        </form>

        <?php
            if(isset($_POST['cal'])){
                $value1 = $_POST['value1'];
                $value2 = $_POST['value2'];
                $opt = $_POST['operator'];

                if($opt=='+'){

                    echo "<h2> your answer is "  ;
                    echo $value1 + $value2;
                    "</h2>";  
                }

                if($opt=='-'){
                    echo "<h2> your answer is : ";
                    echo $value1-$value2;
                    "</h2>";
                }

                if($opt=='*'){
                    echo "<h2> your answer is : ";
                    echo $value1*$value2;
                    "</h2>";
                }

                if($opt=='/'){
                    echo "<h2> your answer is : ";
                    echo $value1/$value2;
                    "</h2>";
                }

            }
        ?>
    </body>
</html>