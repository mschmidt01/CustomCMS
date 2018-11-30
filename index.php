<?php
include_once("frontendHandler.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $frontArray["lang"]?>">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $frontArray["description"]?>">
    <meta name="author" content="<?php echo $frontArray["author"]?>">
    <meta name="keywords" content="<?php echo $frontArray["keywords"]?>" >
    <title><?php echo $frontArray["title"]?></title>
    <link rel="stylesheet" href="css/style.css">
    <script  src="js/form.js"></script>
    <script  src="js/ajax.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo floatLeft"><img src="img/logo.jpg" height="50" width="200" alt="logo-img"></div>
        <nav class="nav floatLeft">
            <?php echo getNavigation()?>
        </nav>
    </div>
</header>
<div class="slider">
    <div class="container">
        <img src="img/mountans.jpg" alt="slider-img">
    </div>
</div>
<section id="content">
    <?php echo $frontArray["content"]?>
</section>
<footer class="footer">
    <div class="container">
        <div class="link-container">
            <ul>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>

