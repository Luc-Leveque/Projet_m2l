<form action="" method="POST" role="form">
	<legend>Barre derecherche</legend>

	<div class="form-group">
		<label for="">Chercher</label>
		<input name="recherche"  type="text" class="form-control" id="" placeholder="Input field">
	</div>


	<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>

<?php if($recherche==1){ ?>

<table class="table">
        <thead>
            <tr>
                <th>Resultat :</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($req1 = $res->fetch())
                {
                ?>
            <tr>
                <td><a href='<?php echo "index.php?page=viewSal&id_s=".$req1['id_s']; ?>'><?= $req1['nom_s'] ; ?><?= $req1['prenom_s'] ; ?></a></td>
            </tr>
            
            <?php } ?>
            <?php 
                while($req3 = $res2->fetch())
                {
                ?>
            <tr>
                <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req2['id_f']; ?>'><?= $req3['Titre'] ; ?></a></td>
            </tr>
            
            <?php } ?> 
                 <?php 
                while($req4 = $res3->fetch())
                {
                ?>
            <tr>
                <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$data['id_f']; ?>'><?= $req4['date_deb'] ; ?></a></td>
            </tr>
            
            <?php } ?>
        </tbody>
    </table>

<?php } ?>

