   <div class="container">
    <form action="#" method="POST">
        <legend>Formulaire d'inscription</legend>

        <div class="form-group">
            login<input type="text" id="login"  name="login" class="form-control" >
            nom<input type="text" id="nom" name="nom" class="form-control" >
            prenom<input type="text" id="prenom" name="prenom" class="form-control" >
            email<input type="text"id="email"  name="email" class="form-control" >
            mdp<input type="password" id="mdp" name="mdp" class="form-control" >
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="progress" id="barre">
        <div class="progress-bar" id="progress">
            
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
        $(function(){
            var progression=20;
            var progressiontotal = 0;
            var etat1 = 0 ;
            var etat2 = 0 ;
            var etat3 = 0 ;
            var etat4 = 0 ;
            var etat5 = 0 ;
            
            $("#login").blur(function(){
                if($(this).val().match("^[A-Za-z -_.]{1,}$"))
                    {
                        progressiontotal = progressiontotal + progression ;  
                        $(this).css('border-color','green');
                        $("#nom").show();
                        $("#progress").animate({width: progressiontotal+'%'});
                        etat1 = 1 ; 

                    }
                    else
                    {
                        $(this).css('border-color','red');
                    }
            });
            $("#nom").blur(function(){
            if($(this).val().match("^[A-Za-z]{1,}$"))
                {
                    progressiontotal = progressiontotal + progression ;  
                    $(this).css('border-color','green');
                    $("#nom").show();
                    $("#progress").animate({width: progressiontotal+'%'});
                    etat2 = 1 ; 
                }
                else
                {
                    $(this).css('border-color','red');
                }
            });
            
          $("#prenom").blur(function(){
           if($(this).val().match("^[A-Za-z]{2,}$"))
                {
                    progressiontotal = progressiontotal + progression ; 
                    $(this).css('border-color','green');
                    $("#prenom").show();
                    $("#progress").animate({width: progressiontotal+'%'});
                    etat3 = 1 ;
                    
                }
                else
                {
                    $(this).css('border-color','red');
                }
            });
            
        $("#email").blur(function(){
           if($(this).val().match("^[A-Za-z0-9 ._@-]{3,}$"))
                {
                    progressiontotal = progressiontotal + progression ; 
                    $(this).css('border-color','green');
                    $("#email").show();
                    $("#progress").animate({width: progressiontotal+'%'});
                    etat4 = 1 ;
                }
                else
                {
                    $(this).css('border-color','red');
                }
            });
        
          $("#mdp").blur(function(){
           if($(this).val().match("^[A-Za-z0-9]{3,}$"))
                {
                    progressiontotal = progressiontotal + progression ; 
                    $(this).css('border-color','green');
                    $("#mdp").show();
                    $("#progress").animate({width: progressiontotal+'%'});
                    etat5 = 1 ;
                }
                else
                {
                    $(this).css('border-color','red');
                }
            });
 
            $("#login").focus(function(){
              if(etat1 != 0 ){
                progressiontotal = progressiontotal - progression ;
                $("#progress").animate({width: progressiontotal+'%'});
              }    
             }); 
            $("#nom").focus(function(){
              if(etat2 != 0 ){
                progressiontotal = progressiontotal - progression ;
                $("#progress").animate({width: progressiontotal+'%'});
              }    
             });  
            $("#prenom").focus(function(){
              if(etat3 != 0 ){
                progressiontotal = progressiontotal - progression ;
                $("#progress").animate({width: progressiontotal+'%'});
              }    
             });  
            $("#email").focus(function(){
              if(etat4 != 0 ){
                progressiontotal = progressiontotal - progression ;
                $("#progress").animate({width: progressiontotal+'%'});
              }    
             }); 
            $("#mdp").focus(function(){
              if(etat5 != 0 ){
                progressiontotal = progressiontotal - progression ;
                $("#progress").animate({width: progressiontotal+'%'});
              }    
             });
        });
    </script>