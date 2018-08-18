<!DOCTYPE html>
<html>
    <?php 
        include "head.php";
    ?>
    <body>
    <?php
       if(isset($_GET["c"])){
            $c = $_GET["c"];
            echo "<link rel='stylesheet' href='styles/sistfunc.css'>";
            include "sistop.php";
            include "wrapper.php";
            include "sisbot.php";
        }
        else{
            echo "<link rel='stylesheet' href='styles/main.css'>";
            include "top.php";
            include "wrapper.php";
            include "bottom.php";
        }
    ?>
    </body>
</html>
