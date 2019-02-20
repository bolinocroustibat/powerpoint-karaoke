<?php
	$f_contents = file('listeFR.txt'); 
	$word = $f_contents[rand(0, count($f_contents) - 1)];
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<title>powerpoint karaoke chooser</title>
		<meta name="Description" content="powerpoint karaoke chooser" />
		<link href="normalize.min.css" rel="stylesheet" type="text/css" media="all" />
	</head>

	<body style="text-align:center;margin: 40px auto;">
		<h1><?php echo $word ?></h1>
		<h3><a target="_blank" href="https://www.google.com/search?hl=Fr&tbm=isch&q=<?php echo $word ?>">voir sur google images</a></h3>
		<br />
		<input type="button" onClick="location.reload();" value="choisir un autre mot au pif">
	</body>

</html>
