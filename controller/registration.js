$('#submit1').click(function(){
    var name = $('#name').val();
    var username  = $('#user').val();
    var passwrd  = $('#pwd').val();

    /*
    $.ajax({
        url:'controller/register.php',
            type:'post',
            data:{
                name: name,
                username: user,
                password: passwrd
                
            },
           success: function(response){
               
                //$('#msg23').html(response);
               alert(response);
                                
           }

    });
 */
alert(name);

});