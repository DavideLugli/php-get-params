<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$message = 'Accesso negato! Ricontrolla i campi inseriti';
if (strlen($name) >= 3) {
  if (strpos($mail,'.') != false && (strpos($mail,'@')) != false ) {
    if (is_numeric($age)) {
        $message = 'Accesso riuscito!';
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2 Params</title>
    <style media="screen">
      h2 {
        color: gold;
      }
      h4 {
        color: lightseagreen;
      }
    </style>
  </head>
  <body>
    <h2>Name</h2>
    <p><?php echo $name; ?></p>
    <h2>Mail</h2>
    <p><?php echo $mail?></p>
    <h2>Age</h2>
    <p><?php echo $age ?></p>
<h4><?php echo $message; ?></h4>
  </body>
</html>
