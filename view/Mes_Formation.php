<div class="table-responsive">
  <h2> Formations en cours de validation :</h2>            
  <table class="table table-condensed table-bordered table-hover">
    <thead>
      <tr>
            <th>Nom salarie</th>
            <th>Prenom Salarié</th>
            <th>Titre de la formation</th>
            <th>Nom du prestataire</th>

      </tr>
    </thead>
    <tbody>
    <?php 
                while($req = $res->fetch())
                {
                ?>
                <tr>
                    <td><?php echo $req['nom_s']; ?></td>
                    <td><?php echo $req['prenom_s']; ?></td>
                    <td><?php echo $req['Titre']; ?></td>
                    <td><?php echo $req['nom_p']; ?></td>
                    <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req['id_f']; ?>'>Voire</a> 
                    </td>
                    <td><a href='<?php echo "index.php?page=validation&id_f=".$req['id_f']."&id_s=".$req['id_s']; ?>'>Valider la formation</a>
                    </td>
                </tr>
                    <?php
}
?>
        </tbody>
    </table>
</div>
   
<div class="table-responsive">
  <h2>Formations validée :</h2>            
  <table class="table table-condensed table-bordered table-hover">
    <thead>
      <tr>
            <th>Nom salarie</th>
            <th>Prenom Salarié</th>
            <th>Titre de la formation</th>
            <th>Nom du prestataire</th>

      </tr>
    </thead>
    <tbody>
    <?php 
                while($req2 = $res2->fetch())
                {
                ?>
                <tr>
                    <td><?php echo $req2['nom_s']; ?></td>
                    <td><?php echo $req2['prenom_s']; ?></td>
                    <td><?php echo $req2['Titre']; ?></td>
                    <td><?php echo $req2['nom_p']; ?></td>
                    <td><a href='<?php echo "index.php?page=Cviewform&id_f=".$req2['id_f']; ?>'>Voire</a> 
                    </td>
                </tr>
                    <?php
}
?>
        </tbody>
    </table>
</div>
    