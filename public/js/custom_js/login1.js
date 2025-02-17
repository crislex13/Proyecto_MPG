"use strict";
$(document).ready(function() {
    $("input[type='checkbox']").iCheck({
        checkboxClass: 'icheckbox_minimal-yellow',
        radioClass: 'iradio_minimal-yellow'

    });
    $("#log_in").bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'El correo electrónico es obligatorio y no puede estar vacío.'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'El correo electrónico es obligatorio y no puede estar vacío.'
                    }
                }
            }
        }
    });
    $("#forgot_password").bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            email_for: {
                validators: {
                    notEmpty: {
                        message: 'El correo electrónico es obligatorio y no puede estar vacío.'
                    }
                }
            }
        }
    })
});