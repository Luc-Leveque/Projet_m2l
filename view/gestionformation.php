
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>

<div class="container">
<form action="" method="POST" id="form" >
	<legend>Ajouter une nouvelle formation</legend>

	<div class="form-group">
		<label for="">Titre</label>
		<input  name="titre" type="text" class="form-control" id="titre" >
	</div>
	
	<div class="form-group">
		<label for="">Contenu</label>
		<input name="contenu" type="text" class="form-control" id="contenu" >
	</div>

	<div class="form-group">
		<label for="">prerequis</label>
		<input  name="prerequis" type="text" class="form-control" id="prerequis" >
	</div>
	
	<div class="form-group">
		<label for="">Date_deb</label>
		<input  name="date_deb" type="date" class="form-control" id="date_deb" >
	</div>
	
	<div class="form-group">
		<label for="">Durée</label>
		<input  name="duree" type="text" class="form-control" id="duree" >
	</div>
	

	<div class="form-group">
		<label for="">Cout en credit</label>
		<input  name="credit" type="text" class="form-control" id="credit" >
	</div>
	
	<div class="form-group">
		<label for="">Adresse</label>
		<input  name="add" type="text" class="form-control" id="add" >
	</div>
	
	<div class="form-group">
		<label for="">Commune</label>
		<input  name="ville" type="text" class="form-control" id="ville" >
	</div>
   
    <div class="form-group">
		<label for="">Code Postal</label>
		<input  name="cp" type="text" class="form-control" id="cp" >
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
   
    <div class="form-group" id="presta">
       <label for="">Prestataire</label>
        <select class="btn btn-default" name="presta">
        <?php   $req = "Select * from prestataire ";
        $requete = $bdd->query($req);

        while($data = $requete->fetch())
        {	
           echo " <option value=".$data['id_p'].">".$data['nom_p']."</option></br>";
        }
        ?>
        </select>
    </div>
    
    
	<button name="submit" type="submit" class="btn btn-primary">Ajouter</button>
</form>
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

<div class="table-responsive">
  <h2>Formations</h2>            
  <table class="table table-condensed table-bordered table-hover">
    <thead>
      <tr>
            <th>Titre</th>
            <th>Date de debut</th>
            <th>Durée</th> 
            <th>Cout en credit</th>
            <th>Ville</th>
            <th>Nom du prestataire</th>
            <th>Type de formation</th>
      </tr>
    </thead>
    <tbody>

    <?php 
                $req = "SELECT * FROM  formation f , adresse a,prestataire p , type_formation t where f.id_a=a.id_a and p.id_p=f.id_p and f.id_t=t.id_t ";

                $requete = $bdd->query($req);

                while($data = $requete->fetch())
                {
                ?>
                <tr>
                    <td><?php echo $data['Titre']; ?></td>
                    <td><?php echo $data['date_deb']; ?></td>
                    <td><?php echo $data['nbr_jour']; ?></td>
                    <td><?php echo $data['cout_credit']; ?></td>
                    <td><?php echo $data['adresse']; ?></td>
                    <td><?php echo $data['nom_p']; ?></td>
                    <td><?php echo $data['libelle']; ?></td>
                    <td><a href='<?php echo "index.php?page=viewform&id_f=".$data['id_f']; ?>'>Voire</a> 
                    </td>
                    <td><a href='<?php echo "index.php?page=suppform&id_f=".$data['id_f']."&id_a=".$data['id_a']; ?>'>Supprimer </a></td>
                    <td><a href='<?php echo "index.php?page=modform&id_f=".$data['id_f']; ?>'>modifier</a>
                    </td>
                </tr>
                    <?php
}
?>
        </tbody>
    </table>
</div>
    

