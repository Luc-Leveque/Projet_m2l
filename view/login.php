<body>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="container-responsive well">
                <div>
                    <?php if(isset($erreur) && !empty($erreur)){ echo $erreur; } ?>
                </div>
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" value="<?= $emailsaisie ; ?>"> </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Mdp"> </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Se souvenir de moi </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Valider</button>
                </form>
            </div>
        </div>
    </div>
</body>
