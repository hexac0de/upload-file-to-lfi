<?php include("index.php") ?>

<?php

	if($_FILES["file"]["error"])
	{
		header("Location: index.php");
		die();	
	}

	$allowed = array('gif');

	$splitFileName = explode(".", $_FILES["file"]["name"]);

	$fileExtension = end($splitFileName);

	$imageDetails = getimagesize($_FILES["file"]["tmp_name"]);

	if( ($imageDetails == FALSE ) 
		||  !in_array($fileExtension, $allowed)
		
	)
	{
		echo "<h1>Hacking attempt !!!</h1>";
	}
	else{

		echo "<h1>Upload Success</h1>";

		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}

?>

