<div class="table-responsive">
  <h2> Historique des formations effectué de l'année en cours :</h2>            
   <table class="table table-condensed table-bordered table-hover">
    <thead>
      <tr>
            <th>Titre</th>
            <th>Date de debut</th>
            <th>Durée</th> 
            <th>Cout en credit</th>
            <th>Ville</th>
            <th>Nom du prestataire</th>
      </tr>
    </thead>
    <tbody>

    <?php 
                while($req = $res->fetch())
                {
                ?>
                <tr>
                    <td ><?php echo $req['Titre']; ?></td>
                    <td><?php echo $req['date_deb']; ?></td>
                    <td><?php echo $req['nbr_jour']; ?></td>
                    <td><?php echo $req['cout_credit']; ?></td>
                    <td><?php echo $req['adresse']; ?></td>
                    <td><?php echo $req['nom_p']; ?></td>
                    <td><?php echo $req['libelle']; ?></td>
                    <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req['id_f']; ?>'>Voir</a> 
                    </td>
                </tr>
                    <?php
}
?>
        </tbody>
    </table>
</div>
