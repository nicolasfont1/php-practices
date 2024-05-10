<?php 
  const NAME = 'Nicolas';
  $age = 0;
  $job = 'developer';
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

  $programmingLanguages = ['PHP', 'Java', 'JavaScript', 'C', 'Pascal', 'Cobol'];
  $programmingLanguages[] = 'EasterEgg';
?>

<h2><?= $output ?></h2>
<div style="margin: auto;">
  <img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
</div>
<h2><?= 'List of programming languages: ' ?></h2>
<ul>
  <?php foreach ($programmingLanguages as $key => $language) : ?>
    <li><?= $key . ' ' . $language ?></li>
  <?php endforeach ?>
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