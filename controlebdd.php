<?php
require("DATABASE.php");
if(isset($_POST['c'])){
    if(!empty($_POST['A']) and !empty($_POST['B'])){
        $A=htmlspecialchars($_POST['A']);
        $B=password_hash($_POST['B'], PASSWORD_DEFAULT);
        //si vous etes enregistrez 2 fois vous serez suspendue
        $voirHUMAIN= $bdd->prepare("SELECT  A FROM bravo WHERE A = ?");
        $voirHUMAIN->execute(array($A));
        if($voirHUMAIN->rowCount()==0){
            $ajt=$bdd->prepare("INSERT INTO bravo(A,B)VALUE (?,?)");
            $ajt->execute(array($A,$B));
            $messageERROR="<b style=color:white;>Bravo vous avez gagnez votre badge de bienvenue !</b>"; 
        }else{
            $messageERROR="cette personne existe deja dans notre repertoire !"; 
        }
    }
    else{
        $messageERROR="vous devez remplir tous les champs";
    }
}
?>