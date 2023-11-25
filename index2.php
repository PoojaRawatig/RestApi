<?php

require 'connect.php';
class DB {
public function insertInto($tableName , $info){
        global $db;
        foreach ($info as $coloumnName => $coloumnValue) {          
            $stmt = $db->prepare("INSERT INTO $student ($coloumnName) VALUES ('$coloumnValue') ");
            $stmt->execute();   
        }
    }
}
$da = new DB;
$da->insertInto('tableOne',array('name' => 'lolo' , 'deg' => '100'));