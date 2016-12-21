<?php

class Administrator
{
    private $username; //properti $username saya beri hak akses public
    private $password; //properti $password saya beri hak akses private
    const USER = "admin";
    const PASS = "4p44j4";

    public function showAdmin()
    {
        return "Anda adalah seorang administrator dengan username $this->username"; //proses akan dijalankan karena
    }                                                                 //function ini masih dalam satu class administrator

    public function adminPrivileges()
    {
        if($this->username == self::USER && $this->password == self::PASS) {
            return "Anda bisa melakukan apa saja";
        } else {
            return "Anda tidak bisa melakukan apa saja karena anda bukan admin";
        }
    }

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}
