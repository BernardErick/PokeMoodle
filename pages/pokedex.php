<?php
        $url = "https://pokeapi.co/api/v2/pokemon/1";
        $pokemon = json_decode(file_get_contents($url));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/blocks/pokemoodle/css/pokedex.css">
</head>
<body>
    <img src="/blocks/pokemoodle/img/pokemoodle_logo.png" alt="">
    <img src="/blocks/pokemoodle/img/circle_red.png" alt="">
    <img src="/blocks/pokemoodle/img/circle_yellow.png" alt="">
    <img src="/blocks/pokemoodle/img/circle_gray.png" alt="">
    <div class="block_pokemoodle">
        <div class="left-side">
            <div class="whitebox">
                <img src= "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png" alt="">
            </div>
        </div>
        <div class="right-side">
            <h5 class="type">Veneno</h5>
            <h5 class="type">Planta</h5>
            <div class="switch">
                <button id="btn1"> < </button>
                <button id="btn2"> > </button>
            </div>
        </div>
    </div>
</body>
</html>