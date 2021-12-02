<?php
class Member{

public $name;

public $photo;

function setName($name) {
    $this->name = $name;
}

function setPhoto($photo) {
    $this->photo = $photo;
}

function getName() {
   return $this->name;
}
function getPhoto() {
   return $this->photo;
}
}

######################
$lundii = new Member();
$lundii->setName("Lundii");
$lundii->setPhoto("images/lundii.jpg");
######################
$trolltusk = new Member();
$trolltusk->setName("Trolltusk");
$trolltusk->setPhoto("images/trolltusk.jpg");
######################
$jake = new Member();
$jake->setName("JayteehWPS");
$jake->setPhoto("images/jake.jpg");
######################
$dakota = new Member();
$dakota->setName("Rpgman1234");
$dakota->setPhoto("images/dakota.jpg");
######################
$zalk = new Member();
$zalk->setName("Keklion");
$zalk->setPhoto("images/zalk.jpg");
######################
$nathan = new Member();
$nathan->setName("I Can Spail");
$nathan->setPhoto("images/nathan.jpg");
######################
$wilson = new Member();
$wilson->setName("Bitpumpkin");
$wilson->setPhoto("images/wilson.jpg");

$listemembers = array($trolltusk,$lundii,$jake,$dakota,$zalk,$nathan,$wilson);
function randomizeMember() {
    global $listemembers;
    $resultat = array_rand($listemembers);
    return $listemembers[$resultat]->getName();
   }
   function findPhotoByName($nom) {
    global $listemembers;
    foreach($listemembers as $value) {
        if($value->getName() === $nom) {
            return $value->getPhoto();
        }
    }
   }
?>