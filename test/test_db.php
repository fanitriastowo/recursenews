<?php 

require '../config/db.php';

use \Filebase\Database;
use \Filebase\Format\Json;

// setting the access and configration to your database
$db = new Database([
    'dir'            => 'db',
    'backupLocation' => 'db\backup',
    'format'         => Json::class,
    'cache'          => true,
    'cache_expires'  => 1800,
    'pretty'         => true,
    'safe_filename'  => true,
    'read_only'      => false
]); 

echo "starting test" . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>";

$post1 = $db->get('post1');
$post1->tanggal = '25 January 2017';
$post1->title = 'Lorem Ipsum Dolor';
$post1->content = "
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
";
//$db->save($post1);

$findAll = $db->findAll();
echo "<pre>";
var_dump($findAll);
echo "</pre>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "testing done" . PHP_EOL;

?>

