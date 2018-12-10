$(document).ready(function(){
 
    $("#add").click(function(e){
        e.preventDefault();
 
        $.post(
            'formulaire.php', // Un script PHP que l'on va créer juste après
            {
                todo : $("#task").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à formulaire.php
            },
 
            function(data){
 
               $('#result').html("yolo");
         
            },
            'text'
         );
    });
});