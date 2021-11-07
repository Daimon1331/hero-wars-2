require('./bootstrap');
import bodymovin from 'lottie-web';

var content = document.getElementById('app');

// content.insertAdjacentHTML('beforeend', '');



var state = 'step1';

var animation_click = bodymovin.loadAnimation({
    container: document.getElementById('chest'),
    path: '' + window.ASSET_PATH + '/chestklik.json',
    renderer: 'svg',
    loop: 0,
    autoplay: false,
});


var video_back = document.getElementById('video_back');
var chest = document.getElementById('chest');

chest.addEventListener('click', (animationplay));
function animationplay (){
    if (state === 'end' ) {
    } else {
        if(state === 'step1') {
            animation_click.playSegments([0, 16], true);
            $('#step2').css('display', 'block');
            $('#step1').css('display', 'none');
            state = 'step2';
        } else {
            if(state === 'step2') {
                animation_click.playSegments([16, 30], true);
                $('#step2').css('display', 'none');
                $('#step3').css('display', 'block');
                state = 'step3';
            } else {
                if(state === 'step3') {
                    animation_click.playSegments([30, 58], true);;
                    state = 'end';
                    $('#step3').css('display', 'none');
                    $('#end').css('display', 'block');
                    animation_click.onComplete = function () {
                        video_back.play();
                        $('#container-txt').css('display', 'none');
                        $('#container-chest').css('display', 'none');
                        $('#character').css('display', 'block').addClass("anim-character");
                        setTimeout(function () {
                            $('#character').removeClass("anim-character");
                            $('#container-form').css('display', 'block');
                            }, 3000);
                        }
                }
            }
        }
    }
}

setTimeout(function () {
    if(state === 'step1') {
        animation_click.playSegments([0, 58], true);
        setTimeout(function () {
            $('#step2').css('display', 'block');
            $('#step1').css('display', 'none');
        }, 200);
        setTimeout(function () {
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'block');
        }, 600);
        setTimeout(function () {
            $('#step3').css('display', 'none');
            $('#end').css('display', 'block');
        }, 1000);
        state = 'end';
        animation_click.onComplete = function () {
                video_back.play();
                $('#container-txt').css('display', 'none');
                $('#container-chest').css('display', 'none');
                $('#character').css('display', 'block').addClass("anim-character");
                setTimeout(function () {
                    $('#character').removeClass("anim-character");
                    $('#container-form').css('display', 'block');
                }, 3000);
            }
    } else {
        if(state === 'step2') {
            animation_click.playSegments([16, 58], true);
            setTimeout(function () {
                $('#step2').css('display', 'none');
                $('#step3').css('display', 'block');
            }, 200);
            setTimeout(function () {
                $('#step3').css('display', 'none');
                $('#end').css('display', 'block');
            }, 600);
            state = 'end';
            animation_click.onComplete = function () {
                    video_back.play();
                    $('#container-txt').css('display', 'none');
                    $('#container-chest').css('display', 'none');
                    $('#character').css('display', 'block').addClass("anim-character");
                    setTimeout(function () {
                        $('#character').removeClass("anim-character");
                        $('#container-form').css('display', 'block');
                    }, 3000);
                }
        } else {
            if(state === 'step3') {
                animation_click.playSegments([30, 58], true);
                setTimeout(function () {
                    $('#step3').css('display', 'none');
                    $('#end').css('display', 'block');
                }, 200);
                state = 'end';
                animation_click.onComplete = function () {
                        video_back.play();
                        $('#container-txt').css('display', 'none');
                        $('#container-chest').css('display', 'none');
                        $('#character').css('display', 'block').addClass("anim-character");
                        setTimeout(function () {
                            $('#character').removeClass("anim-character");
                            $('#container-form').css('display', 'block');
                        }, 3000);
                    }
            }
        }
    }
}, 4000);


var animation_character = bodymovin.loadAnimation({
    container: document.getElementById('character'),
    path: '' + window.ASSET_PATH + '/garen.json',
    renderer: 'svg',
    loop: true,
    autoplay: true,
});


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
    if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
        $(mail).addClass("valid");
        $(mail).removeClass("invalid");
        var password = form.querySelector('.password');
        if (password.value.match(/^[^\s<>'"]{6,40}$/)) {
            $(password).addClass("valid");
            $(password).removeClass("invalid");
            var password_confirm = form.querySelector('.password-confirm');
            if (password_confirm.value === password.value) {
                $(password_confirm).addClass("valid");
                $(password_confirm).removeClass("invalid");
                let formData = new FormData(form);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/register',
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
        if (password.value === "") {
            $(password).addClass("invalid");
            $(password).removeClass("valid");
            } else {
            //     if (password.value.match(/^[^\s<>'"]{6,40}$/)) {
                    $(password).addClass("valid");
                    $(password).removeClass("invalid");
            let formData = new FormData(form);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/login',
                data: formData,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == '{"errorCode":3001,"message":"User not found"}') {
                        $(mail).addClass("invalid-response");
                        $(mail).removeClass("valid");
                    } else {

                    }
                    if (data == '{"errorCode":3002,"message":"Incorrect password"}') {
                        $(password).addClass("invalid-response");
                        $(password).removeClass("valid");
                    } else {

                    }
                },
                error: function (data) {
                }
            });
            return false;
        // } else {
        //     $(password).addClass("invalid");
        //     $(password).removeClass("valid");
        // }
        // }
        // } else {
        //     $(mail).addClass("invalid");
        //     $(mail).removeClass("valid");
        }
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

$("#updatepassword .green-button").click(function () {
    var form = this.closest('form')
    var passwordnew = form.querySelector('.password-new')
    var passwordconfirm = form.querySelector('.password-confirm')
    if (passwordnew.value === "") {
        $(passwordnew).addClass("invalid");
        $(passwordnew).removeClass("valid");
    } else {
        if (passwordnew.value.match(/^[^\s<>'"]{6,40}$/)) {
            $(passwordnew).addClass("valid");
            $(passwordnew).removeClass("invalid invalid-no-caption");
            if (passwordconfirm.value === passwordnew.value) {
                $(passwordconfirm).addClass("valid");
                let formData = new FormData(form);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/password/email',
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
            } else {
                $(passwordnew).addClass("invalid-no-caption");
                $(passwordnew).removeClass("valid");
                $(passwordconfirm).addClass("invalid");
                $(passwordconfirm).removeClass("valid");
            }
        } else {
            $(passwordnew).addClass("invalid");
            $(passwordnew).removeClass("valid");
        }
    }
});

$("#open-login, .open-register, .forgot-password").click(function () {
    var removeclass = $(".entryfield")
    for (var i = 0; i < removeclass.length; i++) {
        $(removeclass[i]).removeClass("valid invalid invalid-response invalid-no-caption");
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



