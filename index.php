<?php 
  const NAME = 'Nicolas';
  $job = 'developer';
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');
?>

<h2>
  <?= $output ?>
</h2>
<img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
</style>