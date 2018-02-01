<?php 
    $req = "SELECT * FROM  salarié s WHERE  id_s = $id_s";

    $requete = $bdd->query($req);

    while($data = $requete->fetch())
    {

?>
<form action="" method="POST" >
	<legend>Profil de <?=$data['prenom_s']." ".$data['nom_s'] ?></legend>

	<div class="form-group">
		<label for="">nom</label>
		<input  name="nom" type="text" class="form-control" id="" value="<?= $data['nom_s'] ?>">
	</div>
	
	<div class="form-group">
		<label for="">prenom</label>
		<input name="prenom" type="text" class="form-control" id="" value="<?= $data['prenom_s'] ?>">
	</div>

	<div class="form-group">
		<label for="">email</label>
		<input  name="email" type="text" class="form-control" id="" value="<?= $data['email'] ?>">
	</div>
	
	<div class="form-group">
		<label for="">nouveau mdp</label>
		<input  name="newmdp" type="password" class="form-control" id="" value="">
	</div>
	
	<div class="form-group">
		<label for="">Confirmation mdp</label>
		<input  name="confmdp" type="password" class="form-control" id="" value="">
	</div>

	<button name="submit" type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
                            }
?>