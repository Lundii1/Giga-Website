<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giga Would you rather</title>
    <link rel="shortcut icon" type="image/jpg" href="images/Logo.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body class="container-fluid">
<?php 
include("header.php")
?>
    <main class="row">
        <div class="col box m-5">
        <div class="row">
            <h2>Would you rather... <?php include("WouldYouRatherGameCode.php"); randomize();?></h2>
        </div>
        <div class ="row">
        <div class="col m-5">
        <!-- yeah i know that the a href comes after the h2 and not before but there's a weird bug going on and i'm lazy too fix it xqcL --->
        <a class="wyr" href="">
            <h2 class="WYRImage"> 
            <?php
            include("MembersClass.php");
            echo $nom = randomizeMember(); 
            echo "<img src=".findPhotoByName($nom);  "/>"
            ?>
            </h2>
        </a>
        </div>
        <div class="col m-1 d-flex justify-content-center text-center">
        <h4 class="mx-auto">
         Or
        </h4>
        </div>
        <div class="col m-5">
        <a class="wyr" href="">
        <h2 class="WYRImage"> 
            <?php
            $nom1 = randomizeMember();
            if ($nom1 != $nom) {
                echo $nom1;
                echo "<img src=".findPhotoByName($nom1);  "/>";
            } else {
                while($nom1 === $nom) {
                    $nom1 = randomizeMember();
                    if($nom1 != $nom) {
                        echo $nom1;
                        echo "<img src=".findPhotoByName($nom1);  "/>";
                        break;
                    }
                }
            }
            ?>
            </h2>
        </a>
        </div>
        </div>
        </div>
    </main>
    <?php
    include("footer.php")
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>