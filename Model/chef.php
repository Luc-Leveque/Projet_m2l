<?php
   


   function reserverform($id_s , $id_f)
    {
        global $bdd;
        $etat = 2 ; 
        $requete = $bdd->prepare("Insert into participer(id_s,id_f,etat) Values(:id_s,:id_f,:etat) ");
        $requete->bindValue(":id_u", $id_s, PDO::PARAM_INT);
        $requete->bindValue(":id_f", $id_f, PDO::PARAM_INT);
        $requete->bindValue(":etat", $etat, PDO::PARAM_INT);
        $requete->execute();
        
        return $requete->fetch();
    } 

function majcreditjour($nbr,$ct,$id_s){
    
    global $bdd ; 
        
    $requete = $bdd->prepare("UPDATE salarié SET  credit=:ct, nbj=:nbj WHERE id_s = :id_s");
    $requete ->bindValue(":ct",$ct,PDO::PARAM_STR);
    $requete ->bindValue(":nbr",$nbr,PDO::PARAM_STR);
    $requete ->bindValue(":id_s",$id_s,PDO::PARAM_INT);
    $requete->execute();
    
    return $requete;
    
}