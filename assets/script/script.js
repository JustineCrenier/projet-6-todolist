$("#submit").click(function(e){
    e.preventDefault();

    $.post(
        'assets/script/formulaire.php',
        {
            task : $('#task').val()
        },

        function(data){
            if(data == 'Success'){
                $("#result").html("<p class='correct'>Task send!</p>");
            }else{
                $("#result").html("<p class='error'>This field can't be empty</p>");
            }
        },

        'text'
    );
    
});
$('#submit').click(function() {

     $.post(
        'assets/page/contenu.php', // Le fichier cible côté serveur.
        'false', // Nous utilisons false, pour dire que nous n'envoyons pas de données.
        function getJson(todo){
            $('.todo').append(todo);
        },
        'text' // Format des données reçues.
    );
});
