<?php
    require_once 'database/DBController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <title>List product</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'list':
                    require_once 'function/list.php';
                    break;
                case 'add':
                    require_once 'function/add.php';
                    break;
                 case 'edit':
                    require_once 'function/edit.php';
                    break;
                case 'delete':
                    require_once 'function/delete.php';
                    break;
                default:
                    require_once 'function/list.php';
                    break;                  
            }
        }
        else{
            require_once 'function/list.php';
        }
    ?>
</body>
</html>