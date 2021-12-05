<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giga</title>
    <link rel="shortcut icon" type="image/jpg" href="images/Logo.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body class="container-fluid">
<?php 
include("header.php")
?>
    <main class="row">
        <div class="col box2 m-5">
    <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-2">
    <a href="members.php"><img style="max-width:320px; max-height:320px;min-width:320px; min-height:320px;" src="images/members.png"/></a>
    </div>
    <div class="col-lg-10"><p class="paragraph">Members: The current members of giga</p></div>
    </div>
    <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-2">
    <a href="snake.php"><img style="max-width:320px; max-height:320px; min-width:320px; min-height:320px;" src="images/snake.jpg"/></a>
    </div>
    <div class="col-lg-10"><p class="paragraph">Snake: In the game of Snake, the player uses the arrow keys to move a "snake" around the board. As the snake finds food, it eats the food, and thereby grows larger. The game ends when the snake either moves off the screen or moves into itself. The goal is to make the snake as large as possible before that happens.</p></div>
    </div>
    <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-2">
    <a href="music.php"><img style="max-width:320px; max-height:320px; min-width:320px; min-height:320px;" src="images/PepeJam.gif"/></a>
    </div>
    <div class="col-lg-10"><p class="paragraph">Music: Listen to any music on Youtube, mini-player works on PC when using Firefox.</p></div>
    </div>
    <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-2">
    <a href="test.php"><img style="max-width:320px; max-height:320px; min-width:320px; min-height:320px;" src="images/fun.png"/></a>
    </div>
    <div class="col-lg-10"><p class="paragraph">Fun: Click on it to go to a random website</p></div>
    </div>
    <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-2">
    <a href="wyr.php"><img style="max-width:320px; max-height:320px; min-width:320px; min-height:320px;" src="images/WYR.png"/></a>
    </div>
    <div class="col-lg-10"><p class="paragraph">Would you rather: "Would you rather" is a conversation or party game that poses a dilemma in the form of a question beginning with "would you rather" featuring the members of Giga.</p></div>
    </div>
    <div class="row" style="margin-bottom:10px;">
    <div class="col-lg-2">
    <a href="Hungergames.php"><img style="max-width:320px; max-height:320px; min-width:320px; min-height:320px;" src="images/BR.jpg"/></a>
    </div>
    <div class="col-lg-10"><p class="paragraph">Battle Royale: The members of Giga go off in a battle royale against each other, each with the help of a random spirit. Random events occur over the course of several days, so anything is possible.</p></div>
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