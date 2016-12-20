<?php

class Administrator
{
    public $username;
    public $password;
    const USER = "admin";
    const PASS = "t3rs3r4h";

    public function adminPrivileges()
    {
        if($this->username == self::USER && $this->password == self::PASS) {
            return "Anda bisa melakukan apa saja";
        } else {
            return "Anda tidak bisa melakukan apa saja karena anda bukan admin";
        }
    }
}
