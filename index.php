<?php
  const API_URL = 'https://whenisthenextmcufilm.com/api';
  # Se inicia una nueva sesión de cURL.
  $ch = curl_init(API_URL);
  // Indicar que queremos guardar el resultado de la petición y NO mostrarlo en pantalla.
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  /*
  Ejecutamos la petición y guardamos el resultado.
  */
  $result = curl_exec($ch);
  $data = json_decode($result, true); // El true se pasa para indicar que queremos guardar el resultado en forma de array asociativo.

  curl_close($ch);

  var_dump($data)
?>

<main>
  <h2>Next Marvel movie</h2>
</main>

<style>
  :root {
    color-scheme: dark;
  }

  body {
    display: grid;
    place-content: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
</style>

<head>
  <title>PHP Practices</title>
</head>