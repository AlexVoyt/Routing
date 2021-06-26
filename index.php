<?php

    $Route = $_GET["Route"];
    echo 2;
    switch($Route)
    {
        case "200":
            header("Location: http://138.68.70.207/sit/routing/200.php"); 
            exit();
        break;

        case "500":
            header("Location: http://138.68.70.207/sit/routing/500.php"); 
            exit();
        break;
        
        case "404":
            header("Location: http://138.68.70.207/sit/routing/404.php"); 
            exit();
        break;
        
        case "301":
            header("Location: http://138.68.70.207/sit/routing/301.php"); 
            exit();
        break;
    
        default:
            header("Location: https://www.drom.ru/"); 
            exit();

    
    }


?>