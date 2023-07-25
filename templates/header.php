<?php
    include_once("utils/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimePedia | Seu blog de animes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" id="logo"><h2>Anime<span>Pedia</span></h2></a></li>
                <li><a href="<?= $BASE_URL ?>" class="nav-link">home</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">contato</a></li>
            </ul>
        </nav>
    </header>
