<?php
/*
 * This PHP file contains Date & Time Ultilities
 */

/**
 * Get current Time
 */
function printCurrentTime(){
	$date_array = getdate();
	foreach ( $date_array as $key => $val )
	{
		print "$key = $val<br />";
	}

	$formated_date  = "Today's date: ";
	$formated_date .= $date_array['mday'] . "/";
	$formated_date .= $date_array['mon'] . "/";
	$formated_date .= $date_array['year'];

	print $formated_date;
}

/**
 * Print today information
 */
function printToday(){
	print date("m/d/y G.i:s<br>", time());
	print "<br>Today is ";
	print date("j of F Y, \a\\t g.i a", time());
}

?>