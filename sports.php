<?php

$category = $_GET["category"];
$publisher = $_GET["publisher"];

include 'scripts/connections.php';

$con = getConnection();

 //$statement = "SELECT content from news where category = \"" . $category . " and publisher = \"" . $publisher . "\"";
$statement = "SELECT content from news where id = 4";
	   echo $statement;
	   $result = mysqli_query($con,$statement);

       while($row = mysqli_fetch_array($result))
		  {
		  echo $row[0];
		  }
      mysqli_close($con);


?>
