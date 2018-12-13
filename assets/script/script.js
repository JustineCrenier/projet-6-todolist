let addingTask = () =>{
    $('#submit').click(function() {
        $.post(
            'assets/page/contenu.php',
            'false',
            function getJson(task){
                $('.wrapper').html(task);
            },
            'text' 
        );
    }); 
}
$(function(){
    $.post(
        'assets/page/contenu.php',
        'false',
        function getJson(task){
            $('.wrapper').html(task);
        },
        'text' 
    );
});

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
    $('#task').val('');
    addingTask();    
});

addingTask();

