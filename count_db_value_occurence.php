<?php
//connect to the database
$db = mysql_connect("localhost", "root", "") or die("Unable to connect to MySQL");

//select the database to work with
mysql_select_db("faisal", $db);

//query the requirements
//To check for particular columns, replace column name with the desired one
$query = mysql_query("SELECT Type, count(*) as  occur FROM faisal GROUP BY Type ORDER BY count(*) DESC;");

//append the result to an array 
$occur = array();

//associate key with values
while ($row = mysql_fetch_assoc($query)) {
	$occur[$row['Type']] = $row['occur'];
}

//display the results
foreach ($occur as $Type => $count) {
	echo "$Type: $count<br>";
}
?>
