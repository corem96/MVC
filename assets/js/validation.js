$(function () {
    "use strict";
    
    $.validator.setDefaults({
        errorClass: 'help is-danger',
        highlight: function (element) {
            $(element).addClass('is-danger');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-danger');
        }
    });
    
    $.validator.addMethod('strongPassword', function (value, element) {
        return this.optional(element)
            || value.length >= 6
            && /\d/.test(value)
            && /[a-z]/i.test(value)
            && /[A-Z]/i.test(value);
    }, 'El password debe contener mínimo 6 caracteres, una mayúscula, una minúscula y un número');
    
    $("#formulario").validate({
        rules: {
            usuarioReg: {
                nowhitespace: true,
                lettersonly: true
            },
            emailReg: {
                required: true,
                email: true
            },
            passwordReg: {
                required: true,
                strongPassword: true,
                minlength: 6
            },
            passwordConfReg: {
                required: true,
                equalTo: "#passwordReg",
                minlength: 6
            }
        },
        
        messages: {
            usuarioReg: {
                required: 'Nombre de usuario obligatorio',
                nowhitespace: 'no se admiten espacios en blanco',
                lettersonly: 'debe contener solo letras'
            },
            emailReg: {
                required: 'Email es obligatorio',
                email: 'Defina una direccion de email valida'
            },
            passwordReg: {
                required: 'Password obligatorio'
            },
            passwordConfReg: {
                required: 'Password de confirmación obligatorio'
            }
        }
    });
    
    $("#formedit").validate({
        rules: {
            usuarioEdit: {
                nowhitespace: true,
                lettersonly: true
            },
            emailEdit: {
                required: true,
                email: true
            },
            passwordEdit: {
                required: true,
                strongPassword: true,
                minlength: 6
            }
        },
        
        messages: {
            usuarioEdit: {
                required: 'Nombre de usuario obligatorio',
                nowhitespace: 'no se admiten espacios en blanco',
                lettersonly: 'debe contener solo letras'
            },
            emailEdit: {
                required: 'Email es obligatorio',
                email: 'Defina una direccion de email valida'
            },
            passwordEdit: {
                required: 'Password obligatorio'
            }
        }
    });
});