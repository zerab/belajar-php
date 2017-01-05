<?php

class User
{
  public $username;
  public $password;
  final public function logIn($username,$password)//menggunakan keyword final agar tidak  bisa di override
  {
  $this->username = $username;
  $this->password = $password;
    if($username === "userid" && $password === "true") {
    return "Logging in...";
  } else {
    echo "Nggak bisa login gan";
  }
  }
}
$abihu = new User;
echo $abihu->logIn("userid","true");
