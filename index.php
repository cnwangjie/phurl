<?php
//Phurl V3
//Started Development on October 29th
include 'includes/config.php';

include 'includes/functions.php';
include('themes/' . $config['theme'] . '/header.php');

if (empty($_GET['f'])) {
	//Show home page
	include 'includes/home.php';

} elseif ($_GET['f'] == 'short') {
	//Show shortned link page
	echo nextAlias(1);
} elseif ($_GET['f'] == 'redirect') {
	//Redirect to long url

} elseif ($_GET['f'] == 'stats') {
	//Show stats for link

} elseif ($_GET['f'] == 'error') {
	echo "<h1>Something went technicaly wrong...</h1>";
	echo "<h2>Something isnt working right, and has caused this error to be displayed. {$config['site_name']} have been alerted of this problem.</h2>";
	echo "<h4>Error information: ";
	if ($_GET['q'] == 'mysql_con') {
		echo "Phurl was unable to connect to your mysql server.";
	} elseif ($_GET['q'] == 'mysql_db') {
		echo "Phurl was unable to select your mysql database.";
	} else {
		echo "Unknown error. Please contact the Phurl support team.";
	}
}




include('themes/' . $config['theme'] . '/footer.php');
?>