<?php 
  const NAME = 'Nicolas';
  $age = 17;
  $job = 'developer';
  $isDev = true;
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

  $isOlder = $age > 18;
?>

<h2>
  <?= $output ?>
</h2>
<div style="margin: auto;">
  <img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
</div>

<?php 
  if($isOlder) {
    echo "<h2>He can legally drink alcohol.</h2>";
} elseif ($isDev) {
    echo "<h2>He's a promising dev.</h2>";
} else
    echo "<h2>He is a child.</h2>";
?>

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