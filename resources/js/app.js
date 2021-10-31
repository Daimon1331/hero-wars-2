
require('./bootstrap');
require('./lottie');
// require('./bodymovin');






var animation_dragon = bodymovin.loadAnimation({
    container: document.getElementById('dragon'),
    path: '' + window.ASSET_PATH + '/dragon.json',
    renderer: 'svg',
    loop: true,
    autoplay: true,
})


// var animation_character = bodymovin.loadAnimation({
//     container: document.getElementById('character'),
//     path: '' + window.ASSET_PATH + '/garen.json',
//     renderer: 'svg',
//     loop: true,
//     autoplay: true,
// })



var consent = document.getElementsByClassName('consent');
$(consent).click(function () {
    for (var i = 0; i < consent.length; i++) {
        var form = consent[i].closest("form");
        if (consent[i].checked) {
            form.querySelector("button").disabled = '';
        } else {
            form.querySelector("button").disabled = 'disabled';
        }
    }
});

$(".password-button").click(function () {
    var passwordvisible = this.closest('.input-valid').querySelector(".password-type");
    if ($(passwordvisible).attr('type') == 'password'){
        $($(this.closest('.input-valid')).children(".password-button")).removeClass('view');
        $(this.closest('.input-valid').querySelector(".password-hide")).addClass('view');
        $(passwordvisible).attr('type', 'text');
    } else {
        $($(this.closest('.input-valid')).children(".password-button")).removeClass('view');
        $(this.closest('.input-valid').querySelector(".password-visible")).addClass('view');
        $(passwordvisible).attr('type', 'password');
    }
});

$("#register .hero-button").click(function () {
    var form = this.closest('form');
    var mail = form.querySelector('.mail');
    console.log(mail.value);
    if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
        console.log(mail.value);
        $(mail).addClass("valid");
        $(mail).removeClass("invalid");
        var password = form.querySelector('.password');
        console.log(password.value);
        if (password.value.match(/^[^\s<>'"]{6,40}$/)) {
            console.log(password.value);
            $(password).addClass("valid");
            $(password).removeClass("invalid");
            var password_confirm = form.querySelector('.password-confirm');
            console.log(password_confirm.value);
            if (password_confirm.value === password.value) {
                console.log(password_confirm.value);
                $(password_confirm).addClass("valid");
                $(password_confirm).removeClass("invalid");
                let formData = new FormData(form);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '',
                    data: formData,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                    }
                });
                return false;
            } else {
                $(password_confirm).addClass("invalid");
                $(password_confirm).removeClass("valid");
            }
        } else {
            $(password).addClass("invalid");
            $(password).removeClass("valid");
        }
    } else {
        $(mail).addClass("invalid");
        $(mail).removeClass("valid");
    }
});

$("#login .hero-button").click(function () {
    var form = this.closest('form')
    var mail = form.querySelector('.mail')
    var password = form.querySelector('.password')
    if (mail.value === "") {
        $(mail).addClass("invalid");
        $(mail).removeClass("valid");
    } else {
        // if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
        $(mail).addClass("valid");
        $(mail).removeClass("invalid");
        // if (password.value === "") {
        //     $(password).addClass("invalid");
        //     $(password).removeClass("valid");
        // } else {
        //     if (password.value.match(/^[^\s<>'"]{6,40}$/)) {
        //         $(password).addClass("valid");
        //         $(password).removeClass("invalid");
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '',
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data == '{"errorCode":3001,"message":"User not found"}') {
                    $(mail).addClass("invalid");
                    $(mail).removeClass("valid");
                } else {

                }
                if (data == '{"errorCode":3002,"message":"Incorrect password"}') {
                    $(password).addClass("invalid");
                    $(password).removeClass("valid");
                } else {

                }
            },
            error: function (data) {
            }
        });
        return false;
        //     } else {
        //         $(password).addClass("invalid");
        //         $(password).removeClass("valid");
        //     }
        // }
        // } else {
        //     $(mail).addClass("invalid");
        //     $(mail).removeClass("valid");
        // }
    }

});

$("#reset .hero-button").click(function () {
    var form = this.closest('form')
    var mail = form.querySelector('.mail')
    if (mail.value === "") {
        $(mail).addClass("invalid");
        $(mail).removeClass("valid");
    } else {
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '',
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {

            },
            error: function (data) {

            }
        });
        return false;
    }
});

$('#open-login').click(function () {
    $('#register').css('display', 'none');
    $('#login').css('display', 'block');
});
$('.open-register').click(function () {
    $('#register').css('display', 'block');
    $('#login').css('display', 'none');
    $('#reset').css('display', 'none');
});
$('.forgot-password').click(function () {
    $('#register').css('display', 'none');
    $('#login').css('display', 'none');
    $('#reset').css('display', 'block');
});

$(document).ready(function() {
    if (window.location.href.indexOf("/reset") > -1) {
        $('#register').css('display', 'none');
        $('#login').css('display', 'none');
        $('#reset').css('display', 'none');
        $('#updatepassword').css('display', 'block');
    }
});
