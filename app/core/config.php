<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{	
	/* database config*/
	define ('DBNAME', 'my_db');
	define ('DBHOST', 'localhost');
	define ('DBUSER', 'postgres');
	define ('DBPASS', 'gwapome2');

	define('ROOT', 'http://localhost/ProfitTracker/public');
}else
{
	define('ROOT', 'https://www.yourwebsite.com');
}

/** true means show errors **/
define('DEBUG', true);
