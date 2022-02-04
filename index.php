<?php

require 'classes/user.php';

$user = new user();
$user ->getRequest();
echo $user ->parseRequest();

echo UserInterface::MAX_INSTANCES;





