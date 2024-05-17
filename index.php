<head>
  <title>PHP Practices</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Me guardo el resultado en vez de imprimirlo en pantalla.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Apago verificaciones SSL.
$result = curl_exec($ch);

if ($result !== false) {
  $data = json_decode($result, true);

}

curl_close($ch);
?>

<body>
  <?php if ($data) : ?>
  <main class="mainContainer">
      <section class="movieInfoSection">
        <h4>Next Marvel movie</h4>
        <h2><?= $data["title"] ?></h2>
        <p class="mb-0">Release date</p>
        <h4><?= $data["release_date"] ?></h4>
        <em style="margin-bottom: 20vh;">(<?= $data["days_until"] ?> days left)</em>
      </section>
      




  <?php else : ?>
    <main style="display: grid; place-content: center; height: 100vh">
      <h2>Something went wrong :/</h2>
    </main>
  <?php endif; ?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

<style>
  body {
    background-color: #000;
    color: whitesmoke;
  }

  .mainContainer {
    background-image: url(<?= $data["poster_url"] ?>);
    width: 100%;
    max-width: 500px;
    height: 100vh;
    margin: 0 auto;
    background-size: cover;
    background-position: center;
  }

  .movieInfoSection {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    text-align: center;
  }
</style>