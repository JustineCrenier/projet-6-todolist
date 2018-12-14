let addingTask = () =>{
    let check = [];
    $('input[type="checkbox"]:checked').each(value => check.push(($("input:checked").get(value)).value));
    console.log(check);
    //add task
    $.post(
        'assets/script/contenu.php',
        {
            'check[]' : check
        },
        function getJson(task){
            $('.wrapper').html(task);

            $('#register').click(function(e){
                e.preventDefault();
                addingTask();
            });  
        },
        'text' 
    );
}

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

$('#submit').click(function(e) {
    e.preventDefault();
    addingTask();
});

$(function(){
    addingTask();
});