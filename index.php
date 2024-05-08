<?php 
  const NAME = 'Nicolas';
  $age = 23;
  $job = 'developer';
  $isDev = true;
  $output = NAME . ' works as ' . $job . ' and is learning';

  define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

  $isOlder = $age > 18;
  $outputDev = $isDev
	? 'He`s a promising dev.'
	: 'He`s not a dev :(';
?>

<h2>
  <?= $output ?>
</h2>
<div style="margin: auto;">
  <img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
</div>

<?= $outputDev; ?>

<?php if ($isOlder) : ?>
  <h2>He can legally drink alcohol.</h2>
<?php elseif ($isDev) : ?>
  <h2>He's a promising dev.</h2>
<?php else : ?>
  <h2>He is a child.</h2>
<?php endif; ?>

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