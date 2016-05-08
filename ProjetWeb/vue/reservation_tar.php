<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Chauffeur privé</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="style.css" />
 <link href='https://fonts.googleapis.com/css?family=Antic+Didone' rel='stylesheet' type='text/css'>
</head>
<body>

  <?php include("menu.php"); ?>

<?php
if (isset($_POST['prenom']) AND isset($_POST['nom']) AND isset($_POST['email']))
{
	
		echo 'Bonjour ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' !<br />';
	
}
else
{
   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
}
?>

<?php include("footer.php"); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
