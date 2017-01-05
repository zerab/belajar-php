<?php

require "User.php";
class Guest extends User
{
  function logIn($guest,$password){ //akan terjadi error melakukan overriding, karena pada class user kita sudah memberikan keyword final
  $this->username = $guest;
  $this->password = $password;
    if($guest === "userid" && $password === "true") {
      return "Logging in...";
    }
  }
}
