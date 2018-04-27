<div class="table-responsive">
  <h2>Formations :</h2>            
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
            <th>Etat Formation</th>
      </tr>
    </thead>
    <tbody>

    <?php 


                while($req = $res->fetch())
                {
                ?>
                <tr <?php if($req['etat']==0){echo "class='active'";}
                          if($req['etat']==1){echo "class='success'";}
                          if($req['etat']==2){echo "class='danger'";}
                          if($req['etat']==3){echo "class='info'";} ?> >
                    <td ><?php echo $req['Titre']; ?></td>
                    <td><?php echo $req['date_deb']; ?></td>
                    <td><?php echo $req['nbr_jour']; ?></td>
                    <td><?php echo $req['cout_credit']; ?></td>
                    <td><?php echo $req['adresse']; ?></td>
                    <td><?php echo $req['nom_p']; ?></td>
                    <td><?php echo $req['libelle']; ?></td>
                    <td><?php if($req['etat']==0){echo "en cours de Traitement";}
                              if($req['etat']==1){echo "Formation validée";}
                              if($req['etat']==2){echo "Formation refusée";}
                              if($req['etat']==3){echo "Formation efectuée";} ?></td>
                    <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req['id_f']; ?>'>Voir</a> 
                    </td>
                </tr>
                    <?php
}
?>
        </tbody>
    </table>
</div>
    
