<html>
    <body >
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name:<input type="text" name="Fname">
            <input type="submit">

        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] =="POST"){
            $name = $_REQUEST['Fname'];
        
            if (empty($name)){
            echo"Name is empty";

        }
        else{
            echo $name;
        }
    }
        ?>
    </body>
</html>