
<div>
    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
</div>

<div class="container">
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
    </div>


<div class="table-responsive">
  <h2>Salarie</h2>            
  <table class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                    </tr>
                </thead>
              <?php 
      
                while($data = $res->fetch())
                {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $data['nom_s']; ?></td>
                        <td><?php echo $data['prenom_s']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><a href='<?php echo "index.php?page=viewSal&id_f=".$data['id_s']; ?>'>Voir</a> 
                        </td>
                        <td><a href='<?php echo "index.php?page=suppsalarie&id_s=".$data['id_s']."&id_a=".$data['id_a']; ?>'>Supprimer</a> 
                        </td>
                        <td><a href='<?php echo "index.php?page=modsalarie&id_s=".$data['id_s']; ?>'>modifier </a></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
    </table>
</div>
