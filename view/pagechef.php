
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
	

	<button name="submit" type="submit" class="btn btn-primary">Ajouter</button>
</form>

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
                            $req = "SELECT * FROM  salarié where id_c = $id_chef";
                
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

<div class="contenaire">
    <div class="row">
        <div class="col-xs-7 col-xs-offset-2">
            <h1>Formation :</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Prerequis</th>
                        <th>Date de debut</th>
                        <th>Durée</th>
                        <th>Cout en credit</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Code postal</th>
                        <th>Nom du prestataire</th>
                        <th>Type de formation</th>
                    </tr>
                </thead>
                <?php 
                            $req = "SELECT * FROM  formation f , adresse a,prestataire p , type_formation t where f.id_a=a.id_a and p.id_p=f.id_p and f.id_t=t.id_t ";
                
                            $requete = $bdd->query($req);

                            while($data = $requete->fetch())
                            {
                            ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $data['Titre']; ?>
                    </td>
                    <td>
                        <?php echo $data['contenu']; ?>
                    </td>
                    <td>
                        <?php echo $data['prerequis']; ?>
                    </td>
                    <td>
                        <?php echo $data['date_deb']; ?>
                    </td>
                    <td>
                        <?php echo $data['nbr_jour']; ?>
                    </td>
                    <td>
                        <?php echo $data['cout_credit']; ?>
                    </td>
                       <td>
                        <?php echo $data['adresse']; ?>
                    </td>
                    <td>
                        <?php echo $data['commune']; ?>
                    </td>
                    <td>
                        <?php echo $data['cp']; ?>
                    </td>
                    <td>
                        <?php echo $data['nom_p']; ?>
                    </td>
                    <td>
                        <?php echo $data['libelle']; ?>
                    </td>
                    <td> <a href='<?php echo "index.php?page=reserveform&id_s=".$data['id_s']."&id_f=".$data['id_f']."&nbr=".$data['nbr_jour']."&ct=".$data['cout_credit']; ?>'>S'inscrire </a> 
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

