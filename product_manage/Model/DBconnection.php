<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 16/02/2019
 * Time: 17:29
 */
namespace Model;
use PDO;

class DBconnection
{
    public $dsn;
    public $user;
    public $password;
    public function __construct($dsn,$user,$password)
    {
        $this->dsn = $dsn;
        $this->user=$user;
        $this->password=$password;
    }
    public function connect(){
        return new PDO($this->dsn, $this->user, $this->password);
    }

}