<?php

require 'Administrator.php';

$admin = new Administrator("admin","4p44j4");
echo $admin->adminPrivileges() . "<br>"; //proses akan berjalan karena dengan fungsi construct, saya sudah mengatur
echo $admin->showAdmin();                //username dan password
echo "<br>";

//Konsep cloning adalah membuat object baru yang sama dengan object lama namun mempunyai ruang serdiri dalam memori. Jadi apapun yang terjadi pada object hasil clone tidak akan mempengaruhi object yang di clone
var_dump($admin); //Dumping object admin sebelum di clone
echo "<br>";
$third_admin = clone $admin; //membuat terlebih dahulu clone dari admin
$third_admin->setUser("admin_ketiga");
var_dump($admin);
echo "<br>";
var_dump($third_admin);
//setelah kita dumping perbedaannya terlihat. value property username $third_admin berubah dari admin menjadi admin_ketiga. Tetapi perubahan ini tidak mempengaruhi value property username $admin karena $third_admin memiliki tempat memori sendiri sehingga tidak merubah keadaan apapun dari $admin. Hal ini bisa dilihat ketika value property username $third_admin berubah tetapi value property username $admin tidak berubah.
echo "<br>";
//konsep copy pada object pada dasarnya hanya mereferensikan object satu kedalam object lainnya jadi jika salah satu diubah maka yang lain juga akan berubah
var_dump($admin); //Dumping object admin sebelum di copy
$second_admin = $admin; //mengcopy object admin kedalam second_admin
$second_admin->setUser("admin_kedua");
echo "<br>";
var_dump($admin);
echo "<br>";
var_dump($second_admin);
 //value property username berubah dari objek admin menjadi admin_kedua meskipun hanya $second_admin yang diubah, hal ini terjadi karena object $second_admin pada dasarnya hanya direferensi kan pada object $admin. Jadi secara sederhana, apapun milik $admin adalah milik $second_admin, dan apapun yang milik $second_admin juga milik $admin
