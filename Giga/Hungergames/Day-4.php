<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giga BR</title>
    <link rel="shortcut icon" type="image/jpg" href="images/Logo.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <link href="../hungergames.css" rel="stylesheet">
</head>
<body class="container-fluid">
<?php 
include("header.php");
include(dirname(__DIR__)."./Player.php");
include(dirname(__DIR__)."./ListeActions.php");
$y = explode('-',__FILE__);
$stringy = $y[1];
$z = explode('.',$stringy);
$x = (intval($z[0]) + 1)."";
if (!empty($_SERVER['REMOTE_ADDR']) && $x == 1) {
  // If a "remote" address is set, we know that this is not a CLI call
  header('HTTP/1.1 403 Forbidden');
  echo '<button class="btn btn-light">
  <a href="../Index.php">Access denied. Go away, shoo!</a>
</button>';
  die();
} 
$myfile = "Day-".$x.".php";
$createfile = fopen($myfile,"w") or die ("Oops");
fwrite($createfile, file_get_contents("template.php"));
fclose($createfile);
$html = file_get_contents("template.php");
file_put_contents($myfile, $html);
session_start();
?>
<main>
     <div class="col box m-5">
     <h2><?php echo "Day ".$z[0];?></h2>
       <div class="row">
         <?php foreach($listeplayers as $value):?>
          <div class="row">
         <div class="col-lg-12">
         <img src=../<?php echo $value->getPhoto(); ?> class="image">
         <p class="paragraph"><?php $string = $_COOKIE[str_replace(' ','',$value->getName())] ;echo $value->getName();echo "&nbsp"; echo $string;?></p>
         <progress id="health" value=<?php echo "63" ?> max=<?php echo $value->getHP(); ?>></progress>
         </div>
         </div>
         <hr class="dashed" style="width:99.5%"> </hr>
         <?php endforeach; ?>
       </div>
       <div class="row d-flex justify-content-center">
       <button class="btn" id="vertical-center"><a href=<?php echo $myfile ?>>Next day</a></button>
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