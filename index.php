<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmek</title>
    
   
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="menu.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="film.css">
   
</head>

<body>
    <div class="container-fluid jumbotron border">
        <div class="row">
        <div class="col-3">
            <nav class="nav flex-column">
                <a href="index.php" class="nav-item btn-info m-1 p-1 rounded"> Megnézendő filmek listája</a>
                <a href="index.php?program=insert" class="nav-item btn-info m-1 p-1 rounded">Megnézendő film megadása</a>
                <a href="index.php?program=delete" class="nav-item btn-info m-1 p-1 rounded">Megnézett film elvávolítása a listából</a>
                
            </nav>
        </div>
        <div class="col-9 ">
            <div class="bg-light shadow p-1 m-1 rounded">
                <?php
                    if(isset($_GET['program'])){
                        $programNev=$_GET['program'];
                        include $programNev.".php";
                    }else{
                        include "fooldal.php";
                    }

                ?>

            </div>
            </div>
        </div>
        
    </div>
</body>
</html>