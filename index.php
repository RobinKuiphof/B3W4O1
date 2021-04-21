<?php 
    require_once 'includes/connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php print_r($result2[0] [0]) ?> characters uit de database</h1>

</header>
<div id="container">
    <?php include 'includes/char.php';?>    
</div>
<?php include 'includes/footer.php' ?>

</body>
</html>