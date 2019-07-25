<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 14 PHP</title>
</head>
<body>
	<h1>Faire une fonction qui prend un tableau en paramètre et qui retourne un tableau trié par ordre alphabétique.
		$languages = array('HTML','CSS','Javascript','PHP')</h1>
		<?php
		$languages = array('HTML','CSS','Javascript','PHP');
		function triTable($table){
			sort($table);
			foreach ($table as $value){ ?>
				<?= $value. '  ' ?>
			<?php		}
		}
		triTable($languages);
		?>
	</body>
	</html>
