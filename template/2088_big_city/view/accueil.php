<h1>Les derniers articles</h1>

<?php
    foreach($formations as $formation)
    {
    ?>
    <div class="container">
    <div class="panel-heading">
            <p class="MakaleYazariAdi"><?= $formation['Titre'] ; ?></p>
            <div class="btn-group" style="float:right;">
            	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            		<span class="glyphicon glyphicon-cog"></span>
            		<span class="sr-only">Toggle Dropdown</span>
            	</button>
            </div>
            <div class="clearfix"></div>
        </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
                <p> <?= $formation['contenu'] ; ?></p>
                    <h4>Prerequis :</h4><p> <?= $formation['prerequis'] ; ?></p> 
                <p>Pebut de la formation : <?= $formation['date_deb'] ; ?></p> 
                <p>Durée de la formation : <?= $formation['nbr_jour'] ; ?></p>
                <div class="clearfix"></div>                
               </div>
            </div>
        </div>
    </div>
</div> 
    <?php   
    }
?>

<ul class="pagination">
  <li ><a href="index?page=accueil&&num_page=1">1</a></li>
  <li><a href="index?page=accueil&&num_page=2">2</a></li>
  <li><a href="index?page=accueil&&num_page=3">3</a></li>
  <li><a href="index?page=accueil&&num_page=4">4</a></li>
  <li><a href="index?page=accueil&&num_page=5">5</a></li>
</ul>
<?php

