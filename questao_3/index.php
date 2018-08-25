<?php

class MyUserClass
{
    public function getUserList()
    {
        $manager = new DbManager();
        return sort($manager->selectFieldsFromTable("name", "user"));
    }
}

class DbManager
{
    protected $connection;
    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getConnection()
    {
        try{
            return new DatabaseConnection('localhost','user','password');
        } catch(\Exception $err){
            throw $err;
        }
        
    }

    public function selectFieldsFromTable($fields, $table)
    {
        try{
            return $this->connection->query("select $fields from $table");
        } catch (\Exception $err){
            throw $err;
        }
    }
}



