 <div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 col-sm-offset-2   text-left">
           
           <div class="row"><h1><?=  $data['nom_s'] ." ".  $data['prenom_s']?></h1>
            <h3>Email</h3> <?= $data['email'] ?> 
            </div>
            <div class="row"><h3>Credits restants</h3>
            <p>
                <?= $data['credit'] ?>
            </p>
            </div>
            <div class="row"><h3>Nombres de jours de formations restants </h3>
            <p>
                <?= $data['nbj'] ?></p>
            </div>    
        </div>
    </div>
</div>