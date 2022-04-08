$(document).ready(function(){

    $("#snipper").hide();

    $("#verify_ajax").on('click', function(){

        //Email validation
        var email = $("#user_email").val();
        var reg_email = /^[a-z0-9.-_]+@[a-z]+\.[a-z]{2,3}$/;

        if(email=="")
        {
            $("#email_error").html('Correo requerido');
            $("#email_error").css('color','red');
            return false;
        }
        else if(!(email.match(reg_email)))
        {
            $("#email_error").html('Ingresa un correo valido (example@email.com)');
            $("#email_error").css('color','red');
            return false;
        }
        else
        {
            $("#email_error").html('');
        }

        //Password validation
        var password = $("#user_password").val();
        if(password=="")
        {
            $("#password_error").html('Contraseña requerida');
            $("#password_error").css('color','red');
        }
        else
        {
            $("#password_error").html('');
            $("#verify_ajax").hide();
            $("#snipper").show();
        
        //--------Falta validar la contraseña
        /*else if(!(email.match(reg_password)))
        {
            $("#email_error").html('Ingresa una contraseña valida');
            $("#email_error").css('color','red');
            return false;
        }*/

        //Ajax operation
            $.ajax({

                type:'POST',
                url:'registrer.php',
                data:$("#registrer_form").serialize(),
                success:function(result)
                {
                    if(result.status=='fail')
                    {
                        $("#email_error").html('El correo electronico ya fue registrado');
                        $("#email_error").css('color','red');
                        $("#verify_ajax").show();
                        $("#snipper").hide();
                    }
                    else if(result.status=='success')
                    {
                        $("#msg").html('Verifica tu correo electronico');
                        $("#registrer_form")[0].reset();
                        $("#verify_ajax").show();
                        $("#snipper").hide();
                    }
                }
            })
        }
    })
})