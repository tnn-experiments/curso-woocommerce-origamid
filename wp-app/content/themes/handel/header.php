<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?> <?php wp_title( '|' );?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="header">
    <a href="/">
        <img src="./img" alt="">
    </a>
</header>