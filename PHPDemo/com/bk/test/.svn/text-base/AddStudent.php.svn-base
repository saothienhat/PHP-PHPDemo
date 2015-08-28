<html>
<head>
<title>Add New Record in MySQL Database</title>
</head>
<body>
<?php
// Refer:  http://www.tutorialspoint.com/php/mysql_insert_php.htm

if(isset($_POST['add']))
{
	// Initialize Connection
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = 'admin';
	$db_name = "test";
	$table_name = "Student";
	
	$connection = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $connection )
	{
		die('Could not connect: ' . mysql_error());
	}

	if(! get_magic_quotes_gpc() )
	{
		$last_name = addslashes ($_POST['last_name']);
		$first_name = addslashes ($_POST['first_name']);
	}
	else
	{
		$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
	}
	$address = $_POST['address'];

	$sqlQuery = "INSERT INTO " . $table_name .
       "(lastname, firstname, address) " .
       "VALUES ( '$last_name', '$first_name', '$address' )";
	mysql_select_db($db_name);
	$retval = mysql_query( $sqlQuery, $connection );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
	mysql_close($connection);
}
else
{
	?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
		<td width="100">Student Last Name</td>
		<td><input name="last_name" type="text" id="last_name"></td>
	</tr>
	<tr>
		<td width="100">Student First Name</td>
		<td><input name="first_name" type="text" id="first_name"></td>
	</tr>
	<tr>
		<td width="100">Student Address</td>
		<td><input name="address" type="text" id="address"></td>
	</tr>
	<tr>
		<td width="100"></td>
		<td></td>
	</tr>
	<tr>
		<td width="100"></td>
		<td><input name="add" type="submit" id="add" value="Add Student"></td>
	</tr>
</table>
</form>
	<?php
}
?>
</body>
</html>
