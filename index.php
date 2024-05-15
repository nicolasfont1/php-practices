<?php
$url = 'https://whenisthenextmcufilm.com/api';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);

if ($result === false) {
  $error = curl_error($ch);
  echo 'Error: ' . $error;
} else {
  $data = json_decode($result, true);
}

curl_close($ch);
?>

<main>
  <h2>Next Marvel movie</h2>
  <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>">
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>