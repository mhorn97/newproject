<?php

require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3 -> route('GET /', function() {
    $view = new View;
    echo $view->render
    ('views/home.html');
}
);

//Run Fat-Free Framework
$f3->run();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>
<h3>HELLO!!!!!</h3>
<h4>How are you?</h4>
</body>
</html>