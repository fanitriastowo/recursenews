<?php 

include '../config/filebase/Document.php';
include '../config/filebase/Database.php';
include '../config/filebase/Config.php';
include '../config/filebase/Format/FormatInterface.php';
include '../config/filebase/Format/Json.php';
include '../config/filebase/Filesystem.php';
include '../config/filebase/Validate.php';

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

//$db->get('post1')->save(['title'=>'Lorem Ipsum Dolor']);

$post1 = $db->get('post1');
echo "<pre>";
var_dump($post1);
echo "</pre>";

echo $post1->title;

echo "<br>";
echo "<br>";
echo "<br>";
echo "testing done" . PHP_EOL;

?>

