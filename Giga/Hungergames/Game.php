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
$x = 1;
$myfile = "Day-".$x.".php";
$createfile = fopen($myfile,"w") or die ("Oops");
fwrite($createfile, file_get_contents("template.php"));
fclose($createfile);
$html = file_get_contents("template.php");
file_put_contents($myfile, $html);
?>
<main>
     <div class="col box m-5">
     <h2>Battle Royale</h2>
       <div class="row">
         <?php 
          $connect = mysqli_connect("localhost","amine","admin","giga");
          $stmt = $connect->prepare("INSERT INTO Players (name, photo, hp, armor, attackdmg, critchance, critdamage, evasion) VALUES (?,?,?,?,?,?,?,?)");
          $stmt->bind_param("ssiiiddd", $Pname, $Pphoto,$Php,$Parmor,$Pattackdmg,$Pcritchance,$Pcritdmg,$Pevasion);
         foreach($listeplayers as $value): ?>
         <div class="col-lg-3">
             <?php
             $esprit = array_rand($listespirits);
             $value->setSpirit($listespirits[$esprit]);
             $value->SpiritLink($listespirits[$esprit]); 
             setcookie(str_replace(' ','',$value->getName()),$value->getSpirit());
             setcookie("HP".str_replace(' ','',$value->getName()),$value->getHP());
             setcookie("MAXHP".str_replace(' ','',$value->getName()),$value->getHP());  
             $Pname = $value->getName();
             $Pphoto = $value->getPhoto();
             $Php = $value->getHP();
             $Parmor = $value->getArmor();
             $Pattackdmg = $value->getAttackDMG();
             $Pcritchance = $value->getCritChance();
             $Pcritdmg = $value->getCritDamage();
             $Pevasion = $value->getEvasion();
             $sql = mysqli_query($connect,"INSERT INTO Players (name, photo, hp, armor, attackdmg, critchance, critdamage, evasion) VALUES ($Pname,$Pphoto,$Php,$Parmor,$Pattackdmg,$Pcritchance,$Pcritdmg,$Pevasion)");
             $stmt->execute();
             ?>
         <img src=../<?php echo $value->getPhoto(); ?> class="image">
         <p class="paragraph"><?php echo $value->getName();echo "&nbsp"; echo $value->getSpirit();?></p>
         </div>
         <?php endforeach;
         $stmt->close();
         $connect->close();?>
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