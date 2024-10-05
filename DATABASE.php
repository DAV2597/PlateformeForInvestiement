<?php
try {
    $bdd=new PDO("mysql:host=localhost; dbname=sitewebdd; charset=utf8;","root","");
    
} catch (Exception $th) {
    //throw $th;
    die("vous avez une erreur !".$th->getMessage());
}
?>