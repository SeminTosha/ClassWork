<?php
/**
 * Created by PhpStorm.
 * User: антоша
 * Date: 19.09.2017
 * Time: 13:09
 */

class BaseRequest
{
    public $database;

    private $connection;

    public function __construct($database)
    {
        $this->connection=mysqli_connect('localhost','root','',$this->database=$database);
    }

    public function add_new(){

        mysqli_query($this->connection, "INSERT INTO `articles` (`article`,`title`,`time`) VALUES ('".$_POST['text']."','". $_POST['title']."','".$_POST['time']."')");
    }
}