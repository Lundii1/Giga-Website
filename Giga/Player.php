<?php
include("Spirits.php");
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
?>