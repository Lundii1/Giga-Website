<?php 
function randomize() {
 $listeverbes = array("Marry","Fuck","Kill","Play poker with","Eat","Smoke pot with","Rob a bank with","Spy on");
 $resultat = array_rand($listeverbes);
 echo $listeverbes[$resultat];
}
?>