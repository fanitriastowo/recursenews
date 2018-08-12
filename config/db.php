<?php

include 'filebase/Document.php';
include 'filebase/Database.php';
include 'filebase/Config.php';
include 'filebase/Format/FormatInterface.php';
include 'filebase/Format/Json.php';
include 'filebase/Filesystem.php';
include 'filebase/Validate.php';
include 'filebase/Predicate.php';
include 'filebase/Cache.php';
include 'filebase/QueryLogic.php';
include 'filebase/Query.php';

use \Filebase\Database;
use \Filebase\Query;
use \Filebase\QueryLogic;
use \Filebase\Format\Json;

// setting the access and configration to your database
$db = new Database([
    'dir'            => 'config/db',
    'backupLocation' => 'config/db/backup',
    'format'         => Json::class,
    'cache'          => false,
    'cache_expires'  => 1800,
    'pretty'         => true,
    'safe_filename'  => true,
    'read_only'      => false
]);

?>
