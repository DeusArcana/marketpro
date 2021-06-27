<?php

namespace config;

try {
    if (! @include_once(__ROOT__ . 'config/autoload.php')) // @ - to suppress warnings, 
    // you can also use error_reporting function for the same purpose which may be a better option
        throw new \Exception ('autoload.php	does not exist');
    // or 
    if (!file_exists(__ROOT__ . 'config/autoload.php'))
        throw new \Exception ('autoload.php	does not exist');
    else
        require_once(__ROOT__ . 'config/autoload.php'); 
}
catch(\Exception $e) {    
    echo "Message : " . $e->getMessage() . '<br/>';
    echo "Code : " . $e->getCode() . '<br/>';
}

try {
	$conn = new \PDO('mysql:host=localhost;dbname=marketpro', env('DB_USERNAME'), env('DB_PASSWORD'));
	
	$conn->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
	
} catch (\Exception $ex) {
	echo 'The connection has failed<br/>';
	echo $ex->getMessage() . '<br/>';
}

// echo $conn->getAttribute(\PDO::ATTR_CONNECTION_STATUS);
