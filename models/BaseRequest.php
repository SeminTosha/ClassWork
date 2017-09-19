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

    public $id;

    private $connection;

    private $time;


    //Контруктор класса BaseRequest подключается к базу данных при создании объекта
    public function __construct($database)
    {
        $this->connection=mysqli_connect('localhost','root','',$this->database=$database);
    }


    //Метод add_new() добавляет в БД запись отправленную через форму views/index.php
    public function add_new(){

        $this->time=date('Y-m-d G:i:s');
        mysqli_query($this->connection, "INSERT INTO `articles` (`article`,`title`,`time`) VALUES ('".$_POST['text']."','". $_POST['title']."','".$this->time."')");
    }


    //Метод get_all() возвращает массив всех записей из таблицы

    public function get_all(){
        $res=mysqli_query($this->connection, "SELECT * FROM `articles`");


        $all_articles=[];

        while($article=mysqli_fetch_assoc($res)){
           $all_articles[]=$article;
        }

        return $all_articles;

    }




    public function get_one($id){

        $this->id=$id;

        $res=mysqli_query($this->connection, "SELECT * FROM `articles` WHERE `id`='".$this->id."'");

        $ret=mysqli_fetch_assoc($res);

        return $ret;


    }



    public function update(){

        $res=mysqli_query($this->connection, "UPDATE `articles` SET title='".$_POST['title']."', article='". $_POST['text']."' WHERE id='". $_POST['id']."'");

        return $res;
    }
}