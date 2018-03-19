
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>
<form action="" method="POST" id="form" >
	<legend>Ajouter une nouvelle formation</legend>

	<div class="form-group">
		<label for="">Titre</label>
		<input  name="nom" type="text" class="form-control" id="nom" >
	</div>
	
	<div class="form-group">
		<label for="">Contenu</label>
		<input name="prenom" type="text" class="form-control" id="prenom" >
	</div>

	<div class="form-group">
		<label for="">prerequis</label>
		<input  name="email" type="text" class="form-control" id="email" >
	</div>
	
	<div class="form-group">
		<label for="">Date_deb</label>
		<input  name="mdp" type="password" class="form-control" id="mdp" >
	</div>
	
	<div class="form-group">
		<label for="">Durée</label>
		<input  name="add" type="text" class="form-control" id="add" >
	</div>
	

	<div class="form-group">
		<label for="">Cout en credit</label>
		<input  name="ville" type="text" class="form-control" id="ville" >
	</div>
	
	<div class="form-group">
		<label for="">Addresse</label>
		<input  name="cp" type="text" class="form-control" id="cp" >
	</div>
	
	<div class="form-group">
		<label for="">Commune</label>
		<input  name="cp" type="text" class="form-control" id="cp" >
	</div>
	
    <div class="form-group">
       <label for="">Hierarchie</label>
        <select name="hierarchie" id="etat">
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
                        <th>Chef</th>
                    </tr>
                </thead>
                <?php 
                            $req = "SELECT * FROM  salarié where estchef!=2 order by estchef desc";
                
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
                    <td>
                        <?php if($data['estchef']==1){
                                echo"oui";
                            }else{echo"non";} ?>
                    </td>
                        <td> <a href='<?php echo "index.php?page=suppsalarie&id_s=".$data['id_s']."&id_a=".$data['id_a']; ?>'>Supprimer </a> 
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
