<?php
try{
    $dbh = new PDO("mysql:dbname=".DB.";host=".HOST, USER, PASSWORD);
    $dbhbot = new PDO("mysql:dbname=".DBBOT.";host=".HOST, USER, PASSWORD);
} catch (PDOException $error){
    exit("Could not connect to the database. Please tell us at <a href='mailto:pixel-pizza@outlook.com'>our email</a> and we will fix it as soon as possible!");
}