<?php

require 'Administrator.php';

$admin = new Administrator("admin","4p44j4");
echo $admin->adminPrivileges() . "<br>"; //proses akan berjalan karena dengan fungsi construct, saya sudah mengatur
echo $admin->showAdmin();                //username dan password

$admin->username = "user";               //proses tidak akan bisa dijalankan karena saya sudah mengatur bahwa properti
$admin->password = "apaaja";             //username dan password memiliki hak akses private yang mana hanya class itu
echo $admin->adminPrivileges() . "<br>"; //sendiri yang bisa mengakses proses tersebut. Maka akan terjadi error :)
echo $admin->showAdmin();
