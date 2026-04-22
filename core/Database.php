<?php
class Database{
    public $connexion;

    public function connect(){
       $connexion = 
       new PDO('mysql:host=localhost;dbname=hopital', 'root', ''); 
       return $connexion;
    }
}