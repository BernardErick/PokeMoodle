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
    <div class="block_pokemoodle">
        <div class="left-side">
            <div class="whitebox">
                <img src= "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png" alt="">
            </div>
            <p><b>Bulbasaur</b></p>
        </div>
        <div class="right-side">
            <div class="content">
                <p>lvl</p>
                <p>speed</p>
                <p>atk</p>
            </div>
        </div>
    </div>
</body>
</html>