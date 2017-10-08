</!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<style type="text/css">
	
	body{
		background-color: black;
		color: white;
		text-align: center;
	}

	nav{

	}

	nav ul{
		list-style: none;
	}

	nav li {
		display: inline-block;
	}

	#index{
		color: red;
	}

</style>
<body>
<h1 id="index"> Hexac0de Hacking Challenge v1.2 </h1>

<?php
	$page = $_REQUEST["page"];
	$local_file =  "file/".$page;

	include $local_file;

?>



<nav>
<ul>
	<li><a href="index.php?page=home">Home</a></li>
	<li><a href="index.php?page=upload">Upload</a></li>
	<li><a href="index.php?page=solver.txt">Solver</a></li>
</ul>
</nav>
</body>
</html>