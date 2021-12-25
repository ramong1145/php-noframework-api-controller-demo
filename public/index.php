
<?php

//Front Controller pattern: Centralize all requests. 
//Look for the autoload file so we could build absolute paths instead of relatives.
require __DIR__ . "/../vendor/autoload.php";

$request = new App\Http\Request;
//$request->send();