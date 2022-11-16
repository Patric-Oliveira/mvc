<?php 

if($_SERVER['SERVER_NAME'] == 'mvc.test')
{
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	
	define('ROOT', 'http://mvc.test/public');
}else
{
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');

	define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', 'Mini Framework MVC');
define('APP_DESC', 'MVC é o acrônimo de Model-View-Controller é um padrão de projeto de software');

define('DEBUG', true);