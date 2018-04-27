<?php
if(isset($_SESSION['erreur']) && $_SESSION['erreur'] != ""){
    echo "<div class='alert alert-danger'>".$_SESSION['erreur']."</div>";
    $_SESSION['erreur']="";
    
} ?>
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
      </tr>
    </thead>
    <tbody>

    <?php  if($_SESSION['lvl'] == 0 ){        
    
        while($req = $res->fetch())
                {
                ?>
                <tr>
                    <td><?php echo $req['Titre']; ?></td>
                    <td><?php echo $req['date_deb']; ?></td>
                    <td><?php echo $req['nbr_jour']; ?></td>
                    <td><?php echo $req['cout_credit']; ?></td>
                    <td><?php echo $req['adresse']; ?></td>
                    <td><?php echo $req['nom_p']; ?></td>
                    <td><?php echo $req['libelle']; ?></td>
                    <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req['id_f']; ?>'>Voir</a> 
                    </td>
                    <td><a href='<?php echo "index.php?page=demande&id_f=".$req['id_f']; ?>'>Postuler</a>
                    </td>
                </tr>
                    <?php
                }
        }
?>
    <?php  if($_SESSION['lvl'] == 1){
                while($req = $res->fetch())
                {
                ?>
                <tr>
                    <td><?php echo $req['Titre']; ?></td>
                    <td><?php echo $req['date_deb']; ?></td>
                    <td><?php echo $req['nbr_jour']; ?></td>
                    <td><?php echo $req['cout_credit']; ?></td>
                    <td><?php echo $req['adresse']; ?></td>
                    <td><?php echo $req['nom_p']; ?></td>
                    <td><?php echo $req['libelle']; ?></td>
                    <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req['id_f']; ?>'>Voir</a> 
                    </td>
                    <td><a href='<?php echo "index.php?page=demande&id_f=".$req['id_f']."&cc=".$req['cout_credit']."&cd=".$req['nbr_jour']; ?>'>Participer</a>
                    </td>
                </tr>
                    <?php
                }
        }
?>
        </tbody>
    </table>
</div>
    
