

<html>
<head>
<title>PHP Learning</title>
</head>
<body>

<?php

/* Import external php files */
// require '/ui/menu.php';
require '/ultis/phpUtils.php';
require '/model/phpConstant.php';
require '/model/Student.php';
require '/test/DatabaseTest.php';

/**
 * Test Accessing to DB
 */
function  testAccessToDatabase(){
	// Initialize Connection
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = 'admin';
	$connection = mysql_connect($dbhost, $dbuser, $dbpass);

	/*
	 * Test cases
	 */ 
//	insertStudent($connection, "Bui", "Huu", "", "456 Nhat Tao");
//	getAllStudents($connection); 
//	getStudentById($connection, 2);
//	updateAddressForStudent($connection, 4, "20 Le Dai Hanh");
//	deleteStudentById($connection, 5);

	
	
	// Close Connection
	mysql_close($connection);
}

/**
 * Test OOP concepts
 */
function testOOP() {
	$student_1 = new Student();
	$student_1->setAddress("Testt address");
	echo $student_1->getAddress();
}

/*
 * Main Test case
 */
//testAccessToDatabase();
testOOP();


?>


</body>
</html>
