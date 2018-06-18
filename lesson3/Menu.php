<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 18.06.2018
 * Time: 15:03
 */

class Menu
{
    public $pdo = null;
    public $dbname = 'algorithms';
    public $dbuser = 'root';
    public $dbpass = '';
    public $dbhost = 'localhost';
    public $charset = 'utf8';
    public $options = [
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, // по умолчанию ассоциативный массив
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION // ошибки бросают исключения
    ];

    public function getPDO()
    {

        if (empty($this->pdo)) {
            $this->pdo = new \PDO("mysql:host={$this->dbhost};dbname={$this->dbname};charset={$this->charset}",
                $this->dbuser,
                $this->dbpass,
                $this->options);
        }

        return $this->pdo;
    }
    

    public function getMaxLevel()
    {
        $maxLevel = "select max(level) from category_links";
        $statement = $this->pdo->prepare($maxLevel);

        $statement->execute();

        return $statement->fetch();
    }

    public function getMenuArray()
    {

        $query = "select c.id as id, c.name as category, cl.parent_id as pid, cl.level as level 
                  from categories as c
                  join category_links as cl on c.id = cl.child_id order by id";
        $statement = $this->pdo->prepare($query);

        $statement->execute();

        return $statement->fetchAll();
    }


}


$menu = new Menu();
$menu->getPDO();
$menu->pdo;
//echo $menu->buildTree($menu->getMenuArray());
//var_dump($menu->getMaxLevel()) ;




