<?php
include("Spirits.php");
// connect to database
$connect = mysqli_connect("localhost","amine","admin","giga");

// check connection
if(!$connect) {
    echo 'Connection error '. mysqli_connect_error();
}
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Players (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    photo VARCHAR(45) NOT NULL,
    hp INT NOT NULL, armor INT NOT NULL, attackdmg INT NOT NULL, critchance DECIMAL(19 , 2) NOT NULL, critdamage DECIMAL(19 ,2 ) NOT NULL, evasion DECIMAL(19 ,2) NOT NULL
    )";
    
    if ($connect->query($sql) === TRUE) {
      
    } else {
      echo "Error creating table: " . $connect->error;
    }



include("ListeActions.php");
class Player{

public $name;

public $photo;

public $hp = 100;

public $armor = 10;

public $attackdmg = 12;

public $critchance = 0.15;

public $critdamage = 1.25;

public $evasion = 0.05;

public Spirit $spirit;

function setName($name) {
    $this->name = $name;
}

function setPhoto($photo) {
    $this->photo = $photo;
}

function getName() {
   return $this->name;
}
function getHP() {
    return $this->hp;
 }
function getPhoto() {
   return $this->photo;
}
function getArmor() {
    return $this->armor;
}
function getAttackDMG() {
    return $this->attackdmg;
}
function getCritChance() {
    return $this->critchance;
}
function getCritDamage() {
    return $this->critdamage;
}
function getEvasion() {
    return $this->evasion;
}
function setSpirit($spirit) {
    $this->spirit = $spirit;
}
function doAction() {
    global $listeactions;
    $resultat = array_rand($listeactions);
    return $resultat;
}
function SpiritLink(Spirit $spirit) {
     $this->hp += $spirit->hpmod;
     $this->armor += $spirit->armormod;
     $this->attackdmg += $spirit->attackdmgmod;
     $this->critchance += $spirit->critchancemod;
     $this->critdamage += $spirit->critdmgmod;
     $this->evasion += $spirit->evasionmod;
     if ($this -> evasion < 0) {
         $this->evasion = 0;
     }
     if ($this->critchance < 0) {
         $this->critchance = 0;
     }
}
function getSpirit() {
    return $this->spirit->name;
 }
function isDead() {
    if ($this->hp <= 0) {
        return true;
    } else return false;
}
function Combat(Player $player) {
    #configure l'evasion
    echo $this->name + "has found " + $player->name;
    echo $this->name + "attacks! ";
    $dmgPure = $this->attackdmg - $player->armor;
    if($dmgPure < 0) {
        $dmgPure = 0;
    }
    $player->hp -= $dmgPure;
    echo $player->name + " took " + $dmgPure + " damage!";
    if($player ->isDead()) {
        echo $player->name + " died in combat";
    } else {
        echo $player->name + " attacks back!";
        $dmgPure1 = $player->attackdmg - $this->armor;
        if($dmgPure1 < 0) {
            $dmgPure1 = 0;
        }
        $this->hp -= $dmgPure1;
        echo $this->name + " took " + $dmgPure1 + " damage!";
        if($this ->isDead()) {
            echo $this->name + " died in combat";
        }
    }
}
}

######################
$lundii = new Player();
$lundii->setName("Lundii");
$lundii->setPhoto("images/lundii.jpg");
######################
$trolltusk = new Player();
$trolltusk->setName("Trolltusk");
$trolltusk->setPhoto("images/trolltusk.jpg");
######################
$jake = new Player();
$jake->setName("JayteehWPS");
$jake->setPhoto("images/jake.jpg");
######################
$dakota = new Player();
$dakota->setName("Rpgman1234");
$dakota->setPhoto("images/dakota.jpg");
######################
$zalk = new Player();
$zalk->setName("Keklion");
$zalk->setPhoto("images/zalk.jpg");
######################
$nathan = new Player();
$nathan->setName("I Can Spail");
$nathan->setPhoto("images/nathan.jpg");
######################
$wilson = new Player();
$wilson->setName("Bitpumpkin");
$wilson->setPhoto("images/wilson.jpg");
######################
$ali = new Player();
$ali->setName("Draks");
$ali->setPhoto("images/alik.png");
######################
$jason = new Player();
$jason->setName("flossy");
$jason->setPhoto("images/jason.png");

$listeplayers = array($trolltusk,$lundii,$jake,$dakota,$zalk,$nathan,$wilson,$ali,$jason);
function randomizeMember() {
    global $listeplayers;
    $resultat = array_rand($listeplayers);
    return $listeplayers[$resultat]->getName();
   }
   function findPhotoByName($nom) {
    global $listeplayers;
    foreach($listeplayers as $value) {
        if($value->getName() === $nom) {
            return $value->getPhoto();
        }
    }
   }
   // prepare and bind
//    $stmt = $connect->prepare("INSERT INTO Players (name, photo, hp, armor, attackdmg, critchance, critdamage, evasion) VALUES (?,?,?,?,?,?,?,?)");
//    $stmt->bind_param("ssiiiddd", $Pname, $Pphoto,$Php,$Parmor,$Pattackdmg,$Pcritchance,$Pcritdmg,$Pevasion);
//    foreach($listeplayers as $value) {
//        $Pname = $value->getName();
//        $Pphoto = $value->getPhoto();
//        $Php = $value->getHP();
//        $Parmor = $value->getArmor();
//        $Pattackdmg = $value->getAttackDMG();
//        $Pcritchance = $value->getCritChance();
//        $Pcritdmg = $value->getCritDamage();
//        $Pevasion = $value->getEvasion();
//        $sql = mysqli_query($connect,"INSERT INTO Players (name, photo, hp, armor, attackdmg, critchance, critdamage, evasion) VALUES ($Pname,$Pphoto,$Php,$Parmor,$Pattackdmg,$Pcritchance,$Pcritdmg,$Pevasion)");
//    $stmt->execute();
//    }
//    $stmt->close();
//    $connect->close();
?>