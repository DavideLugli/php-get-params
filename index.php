<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
<?php $psw = $_GET['password'];
if ($psw == 'Boolean') {
  $class = 'green';
  $messaggio = 'Password Corretta. Benvenuto';
} else {
  $class = 'red';
  $messaggio = 'Password errata. Riprova';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Snack 1 Params</title>
  </head>
  <body>
    <h1 class="<?php echo $class; ?>"><?php echo $messaggio ?></h1>
  </body>
</html>
