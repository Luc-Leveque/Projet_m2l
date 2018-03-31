<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 col-sm-offset-2   text-left">
           
           <div class="row"><h1><?= $data['Titre'] ?></h1>
            <p> Formation proposé par <?= $data['nom_p'] ?> sous le format <?= $data['libelle'] ?></p>
            <p><?= $data['contenu'] ?>
            </p>
            </div>
            <div class="row"><h3>Prerequis</h3>
            <p>
                <?= $data['prerequis'] ?>
            </p>
            </div>
            <div class="row"><h3>Date de debut de formation : </h3>
            <p>
                <?= $data['date_deb'] ?></p>
            </div>    
            <div class="row"><h3>Durée de la formation :</h3>
            <p>
            
                    <?= $data['nbr_jour'] ?> jours</p>
            </div>                    
            <div class="row"><h3>Cout en credit de la formation :</h3>
            <p>
                <?= $data['cout_credit'] ?> credits </p> 
            </div>
            <div class="row"><h3>Lieux de la formation :</h3>
            <p>
                <?= $data['adresse'] ?> <?= $data['commune'] ?> <?= $data['cp'] ?> </p>
            </div>    
        </div>
    </div>
</div>
</body>

</html>