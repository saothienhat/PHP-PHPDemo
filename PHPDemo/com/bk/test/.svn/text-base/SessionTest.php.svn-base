<?php
/*
 * The following example starts a session then register a variable called counter that is incremented each time the page is visited during the session.
 * Make use of isset() function to check if session variable is already set or not.
 * Put this code in a test.php file and load this file many times to see the results.
 */


/**
 * Get the times that User access to page
 */
function getAccessPageCount(){
	session_start();

	if( isset( $_SESSION['counter'] ) )
	{
		$_SESSION['counter'] += 1;
	}
	else
	{
		$_SESSION['counter'] = 1;
	}
	
//	$sessionTestMessage = "You have visited this page " . getAccessPageCount() . " times.";
//	echo $sessionTestMessage;
	return $_SESSION['counter'];
}

?>