<?php 

	// public link (after hosting remove the /framework/public_html)
	define("PUBLIC_URL", "http://$_SERVER[HTTP_HOST]/framework/public_html/");

	// backend link
	define("BACKEND_URL", dirname(dirname(dirname(__FILE__)))."/backend/");

	// website name
	define('WEBSITE_NAME', 'Framwork');

	// database Infos
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_NAME', 'shop');
	define('DB_PASS', '');
	

 ?>