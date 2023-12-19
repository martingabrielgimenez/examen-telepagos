<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><title>Encontrado!</title>
</head>
<body>
  <!-- botón atrás -->
  <a href="index.php">Volver</a>
<?php
$search_input = $_POST['search_input'];
echo "<br />";
echo "Buscaste a: ";

$poke_api_url = "https://pokeapi.co/api/v2/pokemon/" . $search_input;

// // Leer JSON file
$json_data = file_get_contents($poke_api_url);

// // Decode detalles JSON en array
$response_data = json_decode($json_data);

// // Store detalles Pokémon en variable
$name = $response_data->name;
echo "<br />";
echo "<h1>$name</h1>";
echo "<br />";
$image_url = $response_data->sprites->front_default;
echo "<image  width='300px' src='$image_url' alt='$name' />";
$moves = $response_data->moves;
$moves = array_slice($moves, 0, 8);
echo "<br />";
// print_r($moves);
forEach ($moves as $move) {
  $move_name = $move->move->name;
  echo "<br />";
  echo $move_name;
  echo "<br />";
}
  ?>
</body>
</html>