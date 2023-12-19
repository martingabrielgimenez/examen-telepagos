<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PokeApi Telepagos</title>
</head>
<body>

    <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" alt="" width="540px" height="240px" class="center">
    </center>
  <!-- barra search -->
  <form action="search.php" method="post">
    <center>
        <h3 class="mt-2">Encontrá tu Pokémon favorito ingresando su nombre o número</h3>
        <input type="text" name="search_input" class="mt-2" placeholder="Busca tu pokémon...">
        <button type="submit">Buscar</button>
    </center>
  </form>
<?php

// consumiendo Api con límite de 15 pokémones
$poke_api_url = 'https://pokeapi.co/api/v2/pokemon?limit=15&offset=0';

// Lee archivo JSON
$json_data = file_get_contents($poke_api_url);

// Decode JSON en array php
$response_data = json_decode($json_data);

// Store resultados pokémon en variable
$poke_objects = $response_data->results;

// Fetch detalles pokémon de a uno
foreach ($poke_objects as $pokemon) {
  // Store cada url pokémon y nombres en variables
  $name = $pokemon->name;
  $url = $pokemon->url;
  echo "<br />";
  echo "<li>$name</li>";
  echo "<br />";
  // Lee archivo JSON file de la url pokémon
  $poke_json_data = file_get_contents($url);
  // Decode JSON en array php
  $poke_response_data = json_decode($poke_json_data);
  // extrae la primera sprite img del url
  $poke_image_url = $poke_response_data->sprites->front_default;
  echo "<image src='$poke_image_url' alt='$name' />";
}

?>
    
      <!-- @ include('layouts.navbar')
    <div class="container py-5">
        @ yield('body')
    -->
    
  <br>
  @Martin Gimenez@
  <br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html><?php /**PATH D:\pokemon\pokeApi\resources\views//layouts/welcome.blade.php ENDPATH**/ ?>