<?php

namespace config;

try {
    if (!@include_once(__ROOT__ . 'config/env.php')) { 
		throw new \Exception('env.php	does not exist');
	}
    if (!file_exists(__ROOT__ . 'config/env.php')) {
		throw new \Exception('env.php	does not exist');
	} else {
		require_once(__ROOT__ . 'config/env.php');
	}
}
catch(\Exception $e) {    
    echo "Message : " . $e->getMessage() . '<br/>';
    echo "Code : " . $e->getCode() . '<br/>';
}
  
  if(!function_exists('env')) {
      function env($key, $default = null)
      {
          $value = getenv($key);

          if ($value === false) {
              return $default;
          }

          return $value;
      }
  }

