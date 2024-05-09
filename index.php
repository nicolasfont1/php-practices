<?php 
  const NAME = 'Nicolas';
  $age = 0;
  $job = 'developer';
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

  $outputMatch = match ($age) {
    0 => 'Thats weird.',
    5 => 'Going to the little school?',
    17 => 'Probably best year',
    18 => 'Last good year',
    19 => 'Oh god...',
    default => 'Meeh...'
  };
?>

<h2><?= $output ?></h2>
<div style="margin: auto;">
  <img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
</div>
<h2><?= $outputMatch ?></h2>

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