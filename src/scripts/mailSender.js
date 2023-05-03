$(function() {
    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
    }

    $('.trrw').on('input', (e) => {
        let number = $.trim($('.trrw').val()).replace(/(\d\d\d)(\d\d\d)(\d\d\d\d)/, "($1) $2 $3");
        $('.trrw').val(number)
        
    })

    $('.sendmail').on('click', (e) => {
        e.preventDefault()
        const name = $('#name'), phone = $('#tel'), email = $('#email'), text = $('#name');
        name.css('border', '1px solid rgba(119, 119, 119, 0.2)')
        phone.css('border', '1px solid rgba(119, 119, 119, 0.2)')
        email.css('border', '1px solid rgba(119, 119, 119, 0.2)')

        $('.sendmail').removeClass("pending")
        $('.sendmail').removeClass("sended")
        $('.sendmail').removeClass("failed")
        
        if(!$('.acceptLicense').is(":checked")) return alert("Пожалуйста, примите Политику Конфиденциальности");

        if($.trim(name.val()) == '') {
            name.css('border', '1px solid red')
        }
        if($.trim(phone.val()) == '') {
            phone.css('border', '1px solid red')
        }
        if($.trim(email.val()) == '' || !validateEmail($.trim(email.val()))) {
            email.css('border', '1px solid red')
        }
        
        if(name.val() == '' || phone.val() == '' || email.val() == '' || !validateEmail($.trim(email.val()))) {
            return alert('Пожалуйста, проверьте все данные')
        }  
        $('.sendmail').addClass("pending")
        alert("Отправляем письмо, пожалуйста, подождите... ")
        $.ajax({
            method: "POST",
            url: "src/vendor/sendmail.php",
            data: {
                name: name.val(),
                phone: phone.val(),
                email: email.val(),
                text: text.val(),
                send: ""
            }
        }).done(function( msg ) {
                alert( msg );
                $('.sendmail').removeClass("pending")
                $('.sendmail').addClass("sended")
                name.css('border', '1px solid rgba(119, 119, 119, 0.2)')
                phone.css('border', '1px solid rgba(119, 119, 119, 0.2)')
                email.css('border', '1px solid rgba(119, 119, 119, 0.2)')
        });
    })
});
