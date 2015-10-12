<?php

// Variable to check whether initialisation is working
$init = true;

include "Settings.php";

$user = $storage = null;


$userClass = Settings::UserImplementation;
$userClassLoc = "Implementations/User/$userClass.php";
if (file_exists($userClassLoc)) {
    include $userClassLoc;
    $user = new $userClass();
} else {
    $init = false;
}

$storageClass = Settings::StorageImplementation;
$storageClassLoc = "Implementations/Storage/$storageClass.php";
if (file_exists($storageClassLoc)) {
    include $storageClassLoc;
    $storage = new $storageClass();
} else {
    $init = false;
}

if (!$init) {
    die("Something went wrong, please try again later");
}

// Build page
?>
Jeej
