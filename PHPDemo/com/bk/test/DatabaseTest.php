<?php
/* Import external php files */
//require 'model/phpConstant.php';



/**
 * Get all Student from DB
 * @param Connection $connection
 */
function getAllStudents($connection){
	if(! $connection )
	{
		die('Could not connect: ' . mysql_error());
	}else {
		echo 'Connected successfully !<br>';
		$sqlQuery = 'SELECT id, lastname, firstname, address FROM student';

		mysql_select_db(DB_NAME_TEST);
		$retval = mysql_query( $sqlQuery, $connection );
		if(! $retval )
		{
			die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			printStudentResult($row);
		}
		echo "Fetched data successfully\n";
	}
}

/**
 * Print result of Student after execute query
 * @param unknown_type $row
 */
function printStudentResult($row){
	echo
				"Student ID:		{$row[COLUMN_ID]}  <br> ".
	         	"Student Full Name: 	{$row[COLUMN_LASTNAME]} " . "{$row[COLUMN_FIRSTNAME]} <br>" .
				"Student Address: 	{$row[COLUMN_ADDRESS]} <br> ".
	         	"--------------------------------<br>";
}

/**
 * Print Student info
 * @param unknown_type $id
 * @param unknown_type $lastname
 * @param unknown_type $firstname
 * @param unknown_type $address
 */
function printStudentInfo($id, $lastname, $firstname, $address){
	echo
				"Student ID:		$id  <br> ".
	         	"Student Full Name: 	$lastname " . "$firstname <br>" .
				"Student Address: 	$address <br> ".
	         	"--------------------------------<br>";
}

/**
 * Get  Student by ID from DB
 * @param Connection $connection
 * @param $id
 */
function getStudentById($connection, $id){
	if(! $connection )
	{
		die('Could not connect: ' . mysql_error());
	}else {
		echo 'Connected successfully !<br>';
		$sqlQuery = "SELECT ID, LASTNAME, FIRSTNAME, ADDRESS FROM STUDENT WHERE ID = " . $id;
		echo "SQL query: $sqlQuery <br>";

		mysql_select_db(DB_NAME_TEST);
		$retval = mysql_query( $sqlQuery, $connection );
		if(! $retval )
		{
			die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval))
		{
			$id = $row[strtoupper(COLUMN_ID)];
			$lastname = $row[strtoupper(COLUMN_LASTNAME)]; 
			$firstname = $row[strtoupper(COLUMN_FIRSTNAME)];
			$address = $row[strtoupper(COLUMN_ADDRESS)];
			printStudentInfo($id, $lastname, $firstname, $address);			
		}

		echo "Fetched data successfully !!\n";
	}
}


/**
 * Enter description here ...
 * @param Connection $connectionection
 * @param unknown_type $lastname
 * @param unknown_type $firstname
 * @param unknown_type $email
 * @param unknown_type $address
 */
function insertStudent($connection, $lastname, $firstname, $email, $address){
	if(! $connection )
	{
		die('Could not connect to DB: ' . mysql_error());
	}
	$sqlQuery = "INSERT INTO " . TABLE_NAME_STUDENT .
       "(lastname, firstname, email, address) " .
       "VALUES ( \"$lastname\", \"$firstname\", \"$email\", \"$address\" )";

	echo "SQL query: $sqlQuery <br>";
	mysql_select_db(DB_NAME_TEST);
	$retval = mysql_query( $sqlQuery, $connection );
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
}


/**
 * Update address of Student
 * @param unknown_type $conn
 * @param unknown_type $id
 * @param unknown_type $newAddress
 */
function updateAddressForStudent($conn, $id, $newAddress){
	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}

	$sqlQuery = "UPDATE " . TABLE_NAME_STUDENT .
       " SET address = \"$newAddress\" ".
       " WHERE id = $id" ;
	echo "SQL query: $sqlQuery <br>";

	mysql_select_db(DB_NAME_TEST);
	$retval = mysql_query( $sqlQuery, $conn );
	if(! $retval )
	{
		die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully\n";
}


/**
 * Delete Student by ID
 * @param unknown_type $conn
 * @param unknown_type $id
 */
function deleteStudentById($conn, $id){
	if(! $conn ){
		die('Could not connect: ' . mysql_error());
	}

	$sqlQuery = "DELETE FROM " . TABLE_NAME_STUDENT . " WHERE id = $id" ;
	echo "SQL query: $sqlQuery <br>";

	mysql_select_db(DB_NAME_TEST);
	$retval = mysql_query( $sqlQuery, $conn );
	if(! $retval )
	{
		die('Could not delete data: ' . mysql_error());
	}
	echo "Deleted data successfully\n";
}

?>