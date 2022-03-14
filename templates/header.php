<?php 
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang='en-us'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- ESTILO DO PROJETO-->
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/styles.css">
    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com " crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&display=swap" rel="stylesheet"> 
    <title>Blog tecnologia</title>
</head>
<body>
    <header>
        <a href="<?=$BASE_URL?>" id="logo"><img src="<?=$BASE_URL?>/img/logo.svg" alt="Blog tecnologia"></a>
        <nav>
            <ul id="navbar">
                <li><a href="<?=$BASE_URL?>index.php" class="nav-link">Home</a></li>
                <li><a href='#' class="nav-link">Sobre</a></li>
                <li><a href="<?=$BASE_URL?>contact.php" class="nav-link">Contato</a></li>
                <li><a href='#' class="nav-link">Categoria</a></li>
            </ul>
        </nav>
    </header>

