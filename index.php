<?php
define('WEBROOT', str_replace("songapp/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("songapp/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require('Autoloader.php');