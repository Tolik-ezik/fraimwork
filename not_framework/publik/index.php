<?php
$query = $_SERVER['QUERY_STRING'];
echo $query . '<br>';
require '../vendor/core/router.php';
require '../vendor/libs/function.php';

Router::add('(.*)', ['controller' => 'Main', 'action' => 'index']);
Router::add('#[a-z0-9-]+#', " ");

debug(Router::getRouts());

if(Router::matchRouter($query)){
    echo "<hr>";
    debug(Router::getRout());
    echo 'yeas';
}else{
    echo 'no' ;
}




$r = Router::add('#[a-z0-9.&]+#', '#[a-z0-9]+#');
if (preg_match('#$r#ui', $query, $match)){
    echo debug($query) . "<br>";
    echo debug($match) . "Yes";
}else{
    echo debug($query) . "<br>";
    echo debug($match) . "No";
}

echo "<hr>";

$regexp = "#index.php&[a-z0-9.&]+#ui";

$lines = [
  'ваувся asrtfg099',
  'asrtfg',
  'index.php&ddddd',
  'кит и кот'
];

foreach ($lines as $line) {
    echo "Строка: $line\n";

    if (preg_match($regexp, $line, $match)) {
        echo "+ Найдено слово " . debug($match);
    } else {
        echo "- Ничего не найдено" . debug($match);
    }
}