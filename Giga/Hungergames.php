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
</head>
<body class="container-fluid">
<?php 
include("header.php")
?>
<main class="row">
     <div class="col box m-5">
     <h2>Battle Royale</h2>
     <div class ="row">
     <?php
     include("MembersClass.php");
     foreach($listemembers as $value): ?>
            <div class="player col">
            <div class="col-12 col-lg-auto text-center" >
                    <img src=<?php echo $value->getPhoto(); ?> class="image">
                </div>
                <div class="col">
                    <p class="paragraph">
                        <?php
                         echo $value->getName();
                         ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
            </div>
        </div>
        </div>
     </div>
</main>
 <footer>
    <?php
    include("footer.php")
    ?>
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>