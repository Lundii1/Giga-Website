<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giga BR</title>
    <link rel="shortcut icon" type="image/jpg" href="images/Logo.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="hungergames.css" rel="stylesheet">
</head>
<body class="container-fluid">
<?php 
include("header.php");
include("Player.php");
include("ListeActions.php");
?>
<main>
     <div class="col box m-5">
     <h2>Battle Royale</h2>
       <div class="row">
         <?php foreach($listeplayers as $value): ?>
         <div class="col-lg-2">
         <img src=<?php echo $value->getPhoto(); ?> class="image">
         <p class="paragraph"><?php echo $value->getName(); ?></p>
         </div>
         <?php endforeach; ?>
       </div>
       <div class="row d-flex justify-content-center">
       <button class="btn" id="vertical-center"><a href="Hungergames/Game.php">Begin</a></button>
       </div>
       </div>
     </div>
</main>
 <footer>
    <?php
    include("Hungergames/footer.php")
    ?>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>