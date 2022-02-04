<?php

require 'classes/user.php';

$user = new user();
$user ->getRequest(6);
echo $user ->parseRequest() . "<br>";

echo UserInterface::MAX_INSTANCES;





