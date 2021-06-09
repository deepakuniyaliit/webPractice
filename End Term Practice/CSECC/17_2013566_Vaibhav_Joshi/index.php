<!DOCTYPE html>
<html>
<head>
	<title>vrowser</title>
</head>

<style>
	*{
		background-color: white;
	}
	
	#inp{
		width: 800px;
		height: 40px;
		background-color: white;
		border: 2px solid blue;
		border-radius: 12px;
		font-size: 22px;

		
	}

	#Go{
		width: 90px;
		height: 50px;
		border-radius: 30%;
		background-color: lightcyan;
		border: 4px solid yellow;
		font-size: 30px;
		font-style: cursive;
		
	}
	#Go:hover{
		background-color: indigo;
		color: red;
		box-shadow: 4px 7px yellow;
	}
	#inp:hover{
		box-shadow: 3px 3px lightgrey, 6px 7px grey;
	}

</style>

<body>
	<br>
	<center><img src="logo1.jpg" width="300px" height="250px"  >
		<br><br>
	<form action="result.php" method="GET">
	<input type="text" name="searchbar" id="inp" >
	<br><br>
	<input type="submit" name="Go" value="Go" id="Go" >
	</center>


</body>
</html>