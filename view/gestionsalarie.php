
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>
<form action="" method="POST" id="form" >
	<legend>Ajouter un nouveau salarié</legend>

	<div class="form-group">
		<label for="">nom</label>
		<input  name="nom" type="text" class="form-control" id="nom" >
	</div>
	
	<div class="form-group">
		<label for="">prenom</label>
		<input name="prenom" type="text" class="form-control" id="prenom" >
	</div>

	<div class="form-group">
		<label for="">email</label>
		<input  name="email" type="text" class="form-control" id="email" >
	</div>
	
	<div class="form-group">
		<label for="">mdp</label>
		<input  name="mdp" type="password" class="form-control" id="mdp" >
	</div>
	
	<div class="form-group">
		<label for="">Adresse</label>
		<input  name="add" type="text" class="form-control" id="add" >
	</div>
	

	<div class="form-group">
		<label for="">Ville</label>
		<input  name="ville" type="text" class="form-control" id="ville" >
	</div>
	
	<div class="form-group">
		<label for="">Code postal</label>
		<input  name="cp" type="text" class="form-control" id="cp" >
	</div>
	
<div class="form-group">
       <label for="">Hierarchie</label>
        <select name="sepCTR005" id="etat">
            <option id="paschef" value="0">Salarié</option>
            <option id="chef" value="1">Chef</option>
        </select>
    </div>
    
    <div class="form-group" id="bloc_chef">
       <label for="">Nom du chef</label>
        <select class="btn btn-default" name="chef">
        <?php   $req = "Select * from salarié where estchef = 1 ";
        $requete = $bdd->query($req);

        while($data = $requete->fetch())
        {	
           echo " <option value=".$data['id_s'].">".$data['prenom_s']." ".$data['nom_s']."</option></br>";
        }
        ?>
        </select>
    </div>

	<button name="submit" type="submit" class="btn btn-primary">Ajouter</button>
</form>

<script>
    $(function(){       
        $("#etat").change(function(){
           $("#bloc_chef").toggle(400);
        });

    });
</script>

<div class="contenaire">
    <div class="row">
        <div class="col-xs-7 col-xs-offset-2">
            <h1>Salarie :</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Mdp</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <?php 
                            $req = "SELECT * FROM  salarié s , estchefde e  WHERE e.id_s=s.id_s  and e.id_c = $id_chef";
                
                            $requete = $bdd->query($req);

                            while($data = $requete->fetch())
                            {
                            ?>
                    <tbody>
                   <tr>
                    <td>
                        <?php echo $data['nom_s']; ?>
                    </td>
                    <td>
                        <?php echo $data['prenom_s']; ?>
                    </td>
                    <td>
                        <?php echo $data['mdp']; ?>
                    </td>
                    <td>
                        <?php echo $data['email']; ?>
                    </td>
                        <td> <a href='<?php echo "index.php?page=suppsalarie&id_s=".$data['id_s']; ?>'>Supprimer </a> 
                        </td>
                        <td> <a href='<?php echo "index.php?page=modsalarie&id_s=".$data['id_s']; ?>'>modifier </a> 
                        </td>
                        
                        </tr>
                    </tbody>
                    <?php
}
echo "</table>";
?>
        </div>
    </div>
</div>
