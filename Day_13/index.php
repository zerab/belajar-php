<?php

require 'Administrator.php';

$admin = new Administrator();
$admin->username = "admin";
$admin->password = "t3rs3r4h";
echo $admin->adminPrivileges();
