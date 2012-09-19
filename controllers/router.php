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

// this is a test, and we will be removing it later
print "the page your requested is '$page'";
print '<br />';
$vars = print_r($getVars, TRUE);
print "The following get var were passed to the page: <pre>" . $vars . "</pre>";
