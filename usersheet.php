<!doctype html>
<html>
<head>
   <title>User Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<h1>User Stats</h1>
<p></p>
<p></p>
<?php session_start();?>

<img src="<?php echo htmlspecialchars($_SESSION["img"]); ?>" alt="userSprite" />
<p><?php echo($_SESSION['name']."<br />");?></p>
<p><?php echo($_SESSION['stm']."<br />");?></p>
<p><?php echo($_SESSION['cha']."<br />");?></p>
<p><?php echo($_SESSION['wis']."<br />");?></p>




</body>
</html>