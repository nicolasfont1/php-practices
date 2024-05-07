<?php 
  const NAME = 'Nicolas';
  $age = 23;
  $job = 'developer';
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

  $isOlder = $age > 18;
?>

<h2>
  <?= $output ?>
</h2>
<img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
<h4>
  He is older than 18? <?= var_export($isOlder) ?>
</h4>

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