<?php
try
{
    $db=new PDO('mysql:host=mysql;dbname=mysql','root','1122');
    $message='Connected MYSQL';
    print $message;
}
catch(PDOException $e)
{
    $message='Failed connected to MYSQL('.$e->getMessage().')';
    print $message;
}