<?php 
  const NAME = 'Nicolas';
  $age = 0;
  $job = 'developer';
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

  $person = [
    'name' => 'Nicolás',
    'age' => 23,
    'job' => 'developer',
    'sports' => ['football', 'basketball']
  ];
?>

<h2><?= $output ?></h2>
<div style="margin: auto;">
  <img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
</div>
<h2>Things about <?= $person["name"] ?></h2>
<ul>
  <li><?= 'Age: ' . $person["age"] ?></li>
  <li><?= 'Work as: ' . $person["age"] ?></li>
  <li><?= 'He likes to play: ' . $person["sports"][1] ?></li>
  <li><?= 'And also ' . $person["sports"][0] ?></li>
</ul>


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