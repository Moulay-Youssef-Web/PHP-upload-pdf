<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="test upload pdf" content="">
		<title> Test d'upload PDF </title>
	</head>
	<body>


		<<?php 

		if(isset($_POST) && !empty($_POST)){	
		
			if($_FILES['myfile'['error'] == 0]){


			// Test taille du fichier
			if($_FILES['myfile']['size'] > 1500000){
				$error = "Fichier trop lourd";
			}

			// Test extension (type) du fichier
			$extension = strrchr($_FILES['myfile']['name'],'.');
			if($extension != '.pdf'){
				$error = "Fichier non conforme";
			}

			// Résultat final
			if(!isset($error)){
				move_uploaded_file($_FILES['myfile']['tmp_name'], 'Base de données/'.$_FILES['myfile']['name']);
				echo "Le chargement a été effectuer"
			}

		}else{
			$error = "Problème de formulaire";
		}


		}

		 ?>


		<form method="POST" action="#" enctype="multipart/form-data">
			<input type="file" name="myfile" value="">
			<input type="submit" name="chargement" value="Charger le fichier">
		</form>

	</body>
</html>