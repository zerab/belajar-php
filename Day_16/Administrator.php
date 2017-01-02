<?php

class Administrator
{
  public $user;
  public $password;

  public function logIn()
  {
    if ($this->user == "4dmin" && $this->password == "s3t3r4h") {
      return "anda berhasil melakukan login";
    }
  }

  public function __construct($user, $password)
  {
    $this->user = $user;
    $this->password = $password;
  }
}
