<?php 

$req = $bdd->query("SELECT * FROM  formation f ,prestataire p , type_formation t WHERE  id_f = $id_f and f.id_t=t.id_t and f.id_p=p.id_p" )->fetch(); 
?>
<form action="" method="POST" >
	<legend>La formation : <?=$req['Titre'] ?></legend>

	<div class="form-group">
		<label for="">Contenu</label>
		<input  name="contenu" type="text" class="form-control" id="" value="<?= $req['contenu'] ?>">
	</div>
	
	<div class="form-group">
		<label for="">Prerequis</label>
		<input name="prerequis" type="text" class="form-control" id="" value="<?= $req['prerequis'] ?>">
	</div>

	<div class="form-group">
		<label for="">Date_debut</label>
		<input  name="date_deb" type="date" class="form-control" id="" value="<?= $req['date_deb'] ?>">
	</div>
	
	<div class="form-group">
		<label for="">Durée</label>
		<input  name="nbr_jour" type="text" class="form-control" id="" value="<?= $req['nbr_jour'] ?>">
	</div>
    <div class="form-group">
		<label for="">Cout en crédit</label>
		<input  name="cout_credit" type="text" class="form-control" id="" value="<?= $req['cout_credit'] ?>">
	</div>

    <div class="form-group" id="type_form">
       <label for="">Prestataire</label>
        <select class="btn btn-default" name="type">
        <option value="<?=$req['id_p'] ?>"><?= $req['nom_p'] ?></option>
        <?php   $req2 = "Select * from prestataire ";
        $requete = $bdd->query($req2);

        while($data = $requete->fetch())
        {	
           echo " <option value=".$data['id_p'].">".$data['nom_p']."</option></br>";
        }
        ?>
        </select>
    </div>
    
    <div class="form-group">
       <label for="">Etat prestataire</label>
        <select name="etat" id="etat">
            <option id="ancien" value="0">Le prestataire existe déjà</option>
            <option id="new" value="1">Nouveau prestataire</option>
        </select>
    </div>
    
    <div class="form-group" id="bloc_presta">
		<label for="">Nom du prestataire</label>
		<input  name="nom_p" type="text" class="form-control" id="nom_p" >
		<label for="">Adresse</label>
		<input  name="add_p" type="text" class="form-control" id="add" >
		<label for="">Commune</label>
		<input  name="ville_p" type="text" class="form-control" id="ville" >
		<label for="">Code Postal</label>
		<input  name="cp_p" type="text" class="form-control" id="cp" >
	</div>
    
    <div class="form-group" id="type_form">
       <label for="">Type de formation</label>
        <select class="btn btn-default" name="type">
        <?php   $req = "Select * from type_formation ";
        $requete = $bdd->query($req);

        while($data = $requete->fetch())
        {	
           echo " <option value=".$data['id_t'].">".$data['libelle']."</option></br>";
        }
        ?>
        </select>
    </div>
    
    <script>
$(document).change(function(){
    
    var valTemp = $("#etat option:selected").val();

    if ((valTemp == '1' )){
        $("#presta").hide(400);
        $("#bloc_presta").show(400);
    }
    
    if ((valTemp == '0' )){
        $("#presta").show(400);
        $("#bloc_presta").hide(400);
    }
    
    });    
    
$(document).ready(function(){
    
    var valTemp = $("#etat option:selected").val();

    if ((valTemp == '1' )){
        $("#presta").hide(400);
        $("#bloc_presta").show(400);
    }
    
    if ((valTemp == '0' )){
        $("#presta").show(400);
        $("#bloc_presta").hide(400);
    }

});
 
</script>
	
	

	<button name="submit" type="submit" class="btn btn-primary">Valider</button>
</form>