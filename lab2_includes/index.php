<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <script src="https://kit.fontawesome.com/a05c9ef73c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php include "./includes/header.php"; ?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php 
  if ($_GET["onderwerp"] == "tarkov") {
    include "./pages/onderwerp1.php";
  }elseif ($_GET["onderwerp"] == "kickboksen") {
    include "./pages/onderwerp2.php";
  }elseif ($_GET["onderwerp"] == "coderen") {
    include "./pages/onderwerp3.php";
  }
  ?>
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php include "./includes/footer.php"; ?>

</body>
</html>