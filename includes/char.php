<?php 
$amount = $result2[0][0]; 
?>

<?php for($i=0; $i<$amount ; $i++){ ?>
<a class="item" href="character.php?id=<?php print_r($result[$i][0]) ?>">

<div class="left">
    <img alt="fd" class="avatar" src="resources/images/<?php print_r($result[$i][2])?>">
</div>

<div class="right">
    <h2><?php print_r($result[$i][1]) ?></h2>
    <div class="stats">
        <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php print_r($result[$i][3]) ?></li>
            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php print_r($result[$i][6]) ?></li>
            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php print_r($result[$i][7]) ?></li>
        </ul>
    </div>
    <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
</div>
</a>
<?php } ?>
