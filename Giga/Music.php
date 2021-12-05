<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="shortcut icon" type="image/jpg" href="images/Logo.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="hungergames.css" rel="stylesheet">
</head>
<body style="background:black;overflow:hidden;">
<?php 
include("header.php");
$videoURL = "https://www.youtube.com/embed/?listType=playlist&list=PL7Q2ZklqtR8B_EAUfXt5tAZkxhCApfFkL";
$convertedURL = str_replace("watch?v=","embed/", $videoURL);
?> <!-- repare cette merde plus tard -->
<div class ="row">
<form> 
<input class="form-control url" placeholder="Insert youtube link here (doesn't work lmao)" style="width:400vh; margin-bottom:3px">
</form>
</div>
<div class="container-fluid embed-responsive embed-responsive-16by9" style="width:100%;height:85vh">
<iframe class="embed-responsive-item" src=<?php echo $convertedURL?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="overflow:hidden;height:100%;width:100%"></iframe>
        </div>
        <footer>
        <?php
    include("footer.php")
    ?>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="GetYoutube.js" defer></script> repare le script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>