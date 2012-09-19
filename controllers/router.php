<?

// fetch the request
$request = $_SERVER['QUERY_STRING'];

// parse the page request and other get var
$parsed = explode('&', $request);

// page parse the first el
$page = array_shift($parsed);

// rest array are statement
$getVars = array();
foreach ($parsed as $argument) { 
    // split get vars along '='
    list($variable, $value) = split('=', $argument);
    $getVars[$variable] = $value;
}

// compute the path
$target = SERVER_ROOT . '/controllers/' . $page . '.php';

// get target
if (file_exists($target)) { 
    include_once($target);

    // modify page to fit naming convention
    $class = ucfirst($page). '_Controller';

    // instantiate the appropriate class
    if (class_exists($class)) {
        $controller = new $class;
    } else {
        // did we name our class correctly?
        die('class does not exists!');
    }
} else { 
    // cant find file in controllers
    die('page does not exists!');
}

// execute the default() once controller is instantiate
// pass any Get var to main method
$controller->main($getVars);
