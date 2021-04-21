<?php 
$id = $_GET['id'];
$id = $id -1;
require_once 'includes/connect.php';
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?php print_r($result3[$id][1]) ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>

<header><h1><?php print_r($result3[$id][1]) ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src=  "resources/images/<?php print_r($result3[$id][2])?>">
            <div class="stats" style="background-color: <?php print_r($result3[$id][5]) ?> ">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php print_r($result3[$id][3]) ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php print_r($result3[$id][6]) ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php print_r($result3[$id][7]) ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php print_r($result3[$id][8])?></li>
                    <li><b>Armor</b>: <?php print_r($result3[$id][9])?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
               <?php print_r($result3[$id][4]) ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php include 'includes/footer.php' ?>
</body>
</html>