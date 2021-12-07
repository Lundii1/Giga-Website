<?php
// connect to database
$connect = mysqli_connect("localhost","amine","admin","giga");

// check connection
if(!$connect) {
    echo 'Connection error '. mysqli_connect_error();
}
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Spirits (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255) NOT NULL,
    hpmod INT, armormod INT, attackdmgmod INT, critchancemod INT, critdamagemod INT, evasionmod INT
    )";
    
    if ($connect->query($sql) === TRUE) {
      
    } else {
      echo "Error creating table: " . $connect->error;
    }
    
$connect->close();

class Spirit{

public $name;

public $description;

public $hpmod;

public $armormod;

public $attackdmgmod;

public $critchancemod;

public $critdmgmod;

public $evasionmod;

function setDescription($description) {
    $this->description = $description;
}

function getDescription() {
    return $this->description;
}
function setName($name) {
    $this->name = $name;
}
function setModifiers($hpmod, $armormod, $attackdmgmod, $critchancemod, $critdmgmod, $evasionmod) {
    $this->hpmod = $hpmod;
    $this->armormod = $armormod;
    $this->attackdmgmod = $attackdmgmod;
    $this->critchancemod = $critchancemod;
    $this->critdmgmod = $critdmgmod;
    $this->evasionmod = $evasionmod;
}
function getName() {
   return $this->name;
}
}
######################
$AttackSpirit = new Spirit();
$AttackSpirit->setName("Attack Spirit");
$AttackSpirit->setDescription("A spirit specialized in war and combat");
$AttackSpirit->setModifiers(0,-6,20,-0.10,3,0.05);
######################
######################
$ArmoredSpirit = new Spirit();
$ArmoredSpirit->setName("Armored Spirit");
$ArmoredSpirit->setDescription("A spirit specialized in defense");
$ArmoredSpirit->setModifiers(75,12,-3,0,0,0);
######################
######################
$RogueSpirit = new Spirit();
$RogueSpirit->setName("Rogue Spirit");
$RogueSpirit->setDescription("A spirit specialized in stealth and evasion");
$RogueSpirit->setModifiers(-10,-6,5,0.10,0,0.20);
######################
######################
$PureSpirit = new Spirit();
$PureSpirit->setName("Pure Spirit");
$PureSpirit->setDescription("A spirit specialized in everything");
$PureSpirit->setModifiers(20,5,10,0.05,0.50,0.05);
######################
######################
$SnakeSpirit = new Spirit();
$SnakeSpirit->setName("Snake Spirit");
$SnakeSpirit->setDescription("A spirit specialized in being a snake");
$SnakeSpirit->setModifiers(-25,4,10,0.15,-0.75,0.15);
######################
######################
$TigerSpirit = new Spirit();
$TigerSpirit->setName("Tiger Spirit");
$TigerSpirit->setDescription("A spirit specialized in having Tiger-like abilities");
$TigerSpirit->setModifiers(-50,-3,0,1.00,-0.50,0);
######################
######################
$WindSpirit = new Spirit();
$WindSpirit->setName("Wind Spirit");
$WindSpirit->setDescription("A spirit specialized in controlling the wind");
$WindSpirit->setModifiers(-20,-10,30,0.30,0.30,0.50);
######################
######################
$ElephantineSpirit = new Spirit();
$ElephantineSpirit->setName("Elephantine Spirit");
$ElephantineSpirit->setDescription("A spirit specialized in having Elephant-like abilities");
$ElephantineSpirit->setModifiers(30,14,10,0.15,0.10,0.05);
######################
######################
$BodyguardSpirit = new Spirit();
$BodyguardSpirit->setName("Bodyguard Spirit");
$BodyguardSpirit->setDescription("A spirit specialized in being a bodyguard");
$BodyguardSpirit->setModifiers(25,25,0,0,0,-0.05);
######################
######################
$LizardSpirit = new Spirit();
$LizardSpirit->setName("Lizard Spirit");
$LizardSpirit->setDescription("A spirit specialized in having Lizard-like abilities");
$LizardSpirit->setModifiers(0,-10,30,0.35,-0.15,0);
######################
######################
$SmilodonSpirit = new Spirit();
$SmilodonSpirit->setName("Smilodon Spirit");
$SmilodonSpirit->setDescription("A spirit specialized in having Smilodon-like abilities");
$SmilodonSpirit->setModifiers(-50,-5,50,0.60,0.55,0.20);
######################
######################
$OniSpirit = new Spirit();
$OniSpirit->setName("Oni Spirit");
$OniSpirit->setDescription("A spirit specialized in manifesting evil");
$OniSpirit->setModifiers(-15,20,10,0.15,0.15,-0.10);
######################
######################
$RetardSpirit = new Spirit();
$RetardSpirit->setName("Retard Spirit");
$RetardSpirit->setDescription("A spirit specialized in being retarded");
$RetardSpirit->setModifiers(100,-20,20,-0.15,-0.25,0);
######################
######################
$UnluckySpirit = new Spirit();
$UnluckySpirit->setName("Unlucky Spirit");
$UnluckySpirit->setDescription("A spirit specialized in being unlucky");
$UnluckySpirit->setModifiers(-25,-3,-2,-0.14,10,-0.03);
######################
######################
$MeteorSpirit = new Spirit();
$MeteorSpirit->setName("Meteor Spirit");
$MeteorSpirit->setDescription("An unknown and new spirit that comes from the sky");
$MeteorSpirit->setModifiers(0,2,12,0.05,0.25,-0.05);
######################
######################
$ReliantSpirit = new Spirit();
$ReliantSpirit->setName("Reliant Spirit");
$ReliantSpirit->setDescription("A spirit specialized in being reliant");
$ReliantSpirit->setModifiers(50,7,10,0,0,0);
######################
######################
$ShadowSpirit = new Spirit();
$ShadowSpirit->setName("Shadow Spirit");
$ShadowSpirit->setDescription("A spirit that comes from the shadows");
$ShadowSpirit->setModifiers(-20,-5,24,0.05,0.50,0.15);
######################
######################
$GlassSpirit = new Spirit();
$GlassSpirit->setName("Glass Spirit");
$GlassSpirit->setDescription("The first manufactured spirit");
$GlassSpirit->setModifiers(-75,-10,80,0.20,1.50,-0.05);
######################
######################
$GluttonSpirit = new Spirit();
$GluttonSpirit->setName("Glutton Spirit");
$GluttonSpirit->setDescription("A spirit that loves eating");
$GluttonSpirit->setModifiers(300,5,-10,-0.10,900,-0.05);
######################
######################
$GoldSpirit = new Spirit();
$GoldSpirit->setName("Gold Spirit");
$GoldSpirit->setDescription("A golden spirit");
$GoldSpirit->setModifiers(50,20,24,0.30,3.00,0.09);
######################
######################
$BrokenSpirit = new Spirit();
$BrokenSpirit->setName("Broken Spirit");
$BrokenSpirit->setDescription("A spirit that has been broken, we are not sure of its past identity");
$BrokenSpirit->setModifiers(0,0,0,0,0,0); #50%chance to win or lose the fight instantly
######################
######################
$InsaneSpirit = new Spirit();
$InsaneSpirit->setName("Insane Spirit");
$InsaneSpirit->setDescription("A spirit that has gone insane from playing league of legends");
$InsaneSpirit->setModifiers(-10,5,12,0.15,0.50,0.05); #20% will kill itself at end of fight
######################
######################
$EndingSpirit = new Spirit();
$EndingSpirit->setName("Ending Spirit");
$EndingSpirit->setDescription("A spirit that no one can handle");
$EndingSpirit->setModifiers(-10,-2,-1,-0.05,-0.20,0); #0.5% chance to instantly end the game and win
######################
######################
$FatSpirit = new Spirit();
$FatSpirit->setName("Fat Spirit");
$FatSpirit->setDescription("A spirit that is morbidly obese");
$FatSpirit->setModifiers(900,-2,0,0,0,-0.5);
######################
######################
$EraliumSpirit = new Spirit();
$EraliumSpirit->setName("Eralium Spirit");
$EraliumSpirit->setDescription("A spirit made of Eralium");
$EraliumSpirit->setModifiers(75,-4,0,0.10,0.25,-0.05); 
######################
######################
$DepressedSpirit = new Spirit();
$DepressedSpirit->setName("Depressed Spirit");
$DepressedSpirit->setDescription("A spirit that no one can handle");
$DepressedSpirit->setModifiers(-10,2,5,0.35,0,-0.05); 
######################
######################
$MouseSpirit = new Spirit();
$MouseSpirit->setName("Mouse Spirit");
$MouseSpirit->setDescription("A spirit that is a mouse");
$MouseSpirit->setModifiers(-30,-4,0,0, 0.15, 0.35);
######################
######################
$GreedySpirit = new Spirit();
$GreedySpirit->setName("Greedy Spirit");
$GreedySpirit->setDescription("A spirit that represents the reincarnation of Midas");
$GreedySpirit->setModifiers(-20,4,0, 0.15, 0.40,-0.5);
######################
######################
$AncientSpirit = new Spirit();
$AncientSpirit->setName("Ancient Spirit");
$AncientSpirit->setDescription("The first recorded spirit");
$AncientSpirit->setModifiers(50,2,2, 0.20, 0.20, 0.50);
######################
######################
$FastSpirit = new Spirit();
$FastSpirit->setName("Fast Spirit");
$FastSpirit->setDescription("A spirit that is faster than sound");
$FastSpirit->setModifiers(0,0,0,0,0, 0.25);
######################
######################
$LostSpirit = new Spirit();
$LostSpirit->setName("Lost Spirit");
$LostSpirit->setDescription("A spirit that is lost");
$LostSpirit->setModifiers(-10,-2,0,0,0,- 0.5);
######################
######################
$NeutralSpirit = new Spirit();
$NeutralSpirit->setName("Neutral Spirit");
$NeutralSpirit->setDescription("A spirit that doesn't care");
$NeutralSpirit->setModifiers(0,0,0,0,0,0); 
######################
######################
$ElderlySpirit = new Spirit();
$ElderlySpirit->setName("Elderly Spirit");
$ElderlySpirit->setDescription("The spirit that represents old age through weakness");
$ElderlySpirit->setModifiers(-90,0,0,0,0,0);
######################
######################
$OverconfidentSpirit = new Spirit();
$OverconfidentSpirit->setName("Overconfident Spirit");
$OverconfidentSpirit->setDescription("A spirit that is way too confident");
$OverconfidentSpirit->setModifiers(20,12,-7, 0.5, 0.25, 0.10);
######################
######################
$HardSpirit = new Spirit();
$HardSpirit->setName("Hard Spirit");
$HardSpirit->setDescription("A spirit that's hard");
$HardSpirit->setModifiers(0,0,8,0,0,0);
######################
######################
$HolySpirit = new Spirit();
$HolySpirit->setName("Holy Spirit");
$HolySpirit->setDescription("A spirit that comes from heaven");
$HolySpirit->setModifiers(7,7,7, 0.7, 0.7, 0.7);
######################
######################
$SatanicSpirit = new Spirit();
$SatanicSpirit->setName("Satanic Spirit");
$SatanicSpirit->setDescription("A spirit that comes from hell");
$SatanicSpirit->setModifiers(6,6,6, 0.6, 0.6, 0.6);
######################
######################
$DitzySpirit = new Spirit();
$DitzySpirit->setName("Ditzy Spirit");
$DitzySpirit->setDescription("A silly spirit");
$DitzySpirit->setModifiers(0,0,0,0,0, 0.20);
######################
######################
$AngrySpirit = new Spirit();
$AngrySpirit->setName("Angry Spirit");
$AngrySpirit->setDescription("A spirit that's angry'");
$AngrySpirit->setModifiers(0,48,-7,0,0,0);
######################
######################
$StormSpirit = new Spirit();
$StormSpirit->setName("Storm Spirit");
$StormSpirit->setDescription("A spirit that comes from the Wailing Mountains");
$StormSpirit->setModifiers(-30,12,4, 0.5, 0.80, 0.5);
######################
######################
$LoveSpirit = new Spirit();
$LoveSpirit->setName("Love Spirit");
$LoveSpirit->setDescription("A charming spirit that steals stats");
$LoveSpirit->setModifiers(0,0,0,0,0, 0.5); #steals 20% of their stats
######################
######################
$WildSpirit = new Spirit();
$WildSpirit->setName("Wild Spirit");
$WildSpirit->setDescription("A spirit that has been found in the wilderness");
$WildSpirit->setModifiers(-40,8,36,0.15, 0.90, 0.13); 
######################
######################
$UndesirableSpirit = new Spirit();
$UndesirableSpirit->setName("Undesirable Spirit");
$UndesirableSpirit->setDescription("A spirit that needs love, it can also double its own stats");
$UndesirableSpirit->setModifiers(-25,-3,-2,-0.4,-0.35,-0.2); #each round they double their stats
###################### 
######################
$NextSpirit = new Spirit();
$NextSpirit->setName("Next Spirit");
$NextSpirit->setDescription("Go next, ggs, lmao");
$NextSpirit->setModifiers(-90, -11, -9, -0.14, -0.49, -0.4);
######################
######################
$JaggedSpirit = new Spirit();
$JaggedSpirit->setName("Jagged Spirit");
$JaggedSpirit->setDescription("A spirit that returns 50% of the damage it takes");
$JaggedSpirit->setModifiers(75,-4,0,0.10,25,-5); #return 50% of the damage they take
######################
######################
$VampiricSpirit = new Spirit();
$VampiricSpirit->setName("Vampiric Spirit");
$VampiricSpirit->setDescription("Vlad the impaler's spirit, it heals for 100% of the damage they deal");
$VampiricSpirit->setModifiers(10,2,-4,0,0,-5); #They heal for 100% of the damage they deal
######################
$listespirits = array($AncientSpirit,$AngrySpirit,$ArmoredSpirit,$AttackSpirit,$BodyguardSpirit,$BrokenSpirit,$DepressedSpirit,$DitzySpirit,$ElderlySpirit,$ElephantineSpirit,$EndingSpirit,$EraliumSpirit,$FastSpirit,$FatSpirit,$GlassSpirit,$GluttonSpirit,$GoldSpirit,$GreedySpirit,$HardSpirit,$HolySpirit,$JaggedSpirit,$LizardSpirit,$LostSpirit,$LoveSpirit,$MeteorSpirit,$MouseSpirit,$NeutralSpirit,$NextSpirit,$OniSpirit,$OverconfidentSpirit,$PureSpirit,$ReliantSpirit,$RetardSpirit,$RogueSpirit,$SatanicSpirit,$ShadowSpirit,$SmilodonSpirit,$SnakeSpirit,$StormSpirit,$TigerSpirit,$UndesirableSpirit,$UnluckySpirit,$VampiricSpirit,$WildSpirit,$WindSpirit);
?>