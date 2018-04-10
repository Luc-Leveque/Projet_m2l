<?php 
    $req = "SELECT * FROM  salarié s , adresse a WHERE a.id_a =s.id_a and id_s = $id_s";

    $requete = $bdd->query($req);

    while($data = $requete->fetch())
    {

?>
<div class="container">
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
		<label for="">adresse</label>
		<input name="add" type="text" class="form-control" id="" value="<?= $data['adresse'] ?>">
	</div>
	
		<div class="form-group">
		<label for="">Commune</label>
		<input name="ville" type="text" class="form-control" id="" value="<?= $data['commune'] ?>">
	</div>
	
		<div class="form-group">
		<label for="">Code postale</label>
		<input name="cp" type="text" class="form-control" id="" value="<?= $data['cp'] ?>">
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
</div>
<?php
                            }
?>