<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <script>
        window.ASSET_PATH = "/assets"
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div id="app">
<div id="main">
    <div id="light-dragon">
        <svg width="1371" height="900" viewBox="0 0 1371 900" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_404:6)">
                <path d="M333.861 -328.471L1270.2 643.698L397.958 806.963L59.0289 -109.928L333.861 -328.471Z" fill="#FFD84E" fill-opacity="0.2"/>
            </g>
            <defs>
                <filter id="filter0_f_404:6" x="-40.9712" y="-428.471" width="1411.17" height="1335.43" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="50" result="effect1_foregroundBlur_404:6"/>
                </filter>
            </defs>
        </svg>
    </div>
    <div id="container-txt">
        <div class="box-text">
            <p class="p-open">Open</p>
            <p class="p-open">Me!</p>
        </div>
    </div>
    <div id="container-chest">
        <div id="box-chest">
            <div id="chest" onmousedown="return false" onselectstart="return false">
                <img id="step1" src="assets/step1.png" alt="hero-wars">
                <img id="step2" src="assets/step2.png" alt="hero-wars">
                <img id="step3" src="assets/step3.png" alt="hero-wars">
                <img id="end" src="assets/end.png" alt="hero-wars">
            </div>
{{--            <div id="chest-stars">--}}
{{--                <img src="assets/stars.png" alt="hero-wars">--}}
{{--            </div>--}}
        </div>
    </div>
    <div id="dragon">
        <video id="video_back" playsinline loop muted poster="assets/video_back.png">
            <source src="assets/back.mp4" type="video/mp4">
        </video>
    </div>
    <div id="character" class="anim-character">
        <div class="light-character">
        </div>
        <div class="txt-character">
            <p class="h2">Your 1st hero
                <br>is ready to
            <br><span class="h1">fight!</span></p>
        </div>
    </div>
    <div id="container-form" class="close-form">
            <div class="logo">
                <img src="assets/logo.gif" alt="hero-wars">
            </div>
            <p class="p1">Log in or Create an account</p>
            <div class="box-login">
                <a href="/">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 0C32.598 0 42 9.40202 42 21C42 32.598 32.598 42 21 42C9.40202 42 0 32.598 0 21C0 9.40202 9.40202 0 21 0ZM25.2102 16.2464C24.122 15.2059 22.7379 14.6761 21.1963 14.6761C18.4616 14.6761 16.1472 16.5231 15.3215 19.0049C15.1115 19.6349 14.9922 20.3079 14.9922 21C14.9922 21.692 15.1111 22.3649 15.3211 22.9949C16.1468 25.4768 18.4616 27.3238 21.1963 27.3238C22.6091 27.3238 23.8122 26.9516 24.7524 26.3216C25.8645 25.5771 26.6043 24.465 26.8477 23.1525H21.1967V19.0909H31.0859C31.2099 19.7782 31.2768 20.4941 31.2768 21.2387C31.2768 24.4364 30.1313 27.1282 28.1459 28.9562C26.4086 30.5598 24.0313 31.5 21.1963 31.5C17.0918 31.5 13.5409 29.147 11.8131 25.7154C11.102 24.2979 10.6967 22.6943 10.6967 21C10.6967 19.3056 11.1024 17.702 11.8136 16.2845C13.5413 12.8529 17.0918 10.5 21.1963 10.5C24.0266 10.5 26.4034 11.5405 28.2218 13.2348L25.2102 16.2464Z" fill="#FFE5B5"/>
                    </svg>
                </a>
                <a href="/">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 21C0 9.40202 9.40202 0 21 0C32.598 0 42 9.40202 42 21C42 32.598 32.598 42 21 42C9.40202 42 0 32.598 0 21ZM21 10.5C26.775 10.5 31.5 15.225 31.5 21C31.5 26.25 27.6938 30.7125 22.4438 31.5V24.0187H24.9375L25.4625 21H22.575V19.0312C22.575 18.2437 22.9688 17.4563 24.2812 17.4563H25.5938V14.8313C25.5938 14.8313 24.4125 14.5688 23.2313 14.5688C20.8688 14.5688 19.2937 16.0125 19.2937 18.6375V21H16.6687V24.0187H19.2937V31.3687C14.3062 30.5812 10.5 26.25 10.5 21C10.5 15.225 15.225 10.5 21 10.5Z" fill="#FFE5B5"/>
                    </svg>
                </a>
                <a href="/">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.1879 17.0625H14.6563C14.2187 17.0625 14.1312 17.2685 14.1312 17.4955C14.1312 17.9011 14.6504 19.9127 16.5489 22.5732C17.8145 24.3901 19.5977 25.375 21.2203 25.375C22.1939 25.375 22.3143 25.1563 22.3143 24.7795V23.4062C22.3143 22.9688 22.4066 22.8814 22.7148 22.8814C22.942 22.8814 23.3314 22.995 24.2401 23.871C24.5493 24.1801 24.7816 24.4384 24.9708 24.6488C25.4171 25.1452 25.6237 25.375 26.0339 25.375H27.5655C28.0032 25.375 28.2219 25.1563 28.0957 24.7246C27.9576 24.2943 27.4618 23.6701 26.8039 22.9301C26.6229 22.7163 26.396 22.4941 26.1951 22.2974C25.9998 22.1061 25.8291 21.9389 25.7492 21.827C25.522 21.535 25.5869 21.4052 25.7492 21.1456C25.7492 21.1456 27.6152 18.5176 27.8099 17.6254C27.9072 17.3009 27.8099 17.0625 27.3467 17.0625H25.8151C25.4257 17.0625 25.2462 17.2685 25.1488 17.4955C25.1488 17.4955 24.3699 19.3936 23.2666 20.6265C22.9096 20.9834 22.7473 21.097 22.5526 21.097C22.4552 21.097 22.3143 20.9834 22.3143 20.659V17.6254C22.3143 17.236 22.2013 17.0625 21.8767 17.0625H19.4699C19.2266 17.0625 19.0802 17.2432 19.0802 17.4145C19.0802 17.5554 19.1606 17.6549 19.2632 17.7819C19.4293 17.9875 19.6536 18.265 19.6887 18.9069V21.1619C19.6887 21.6562 19.5994 21.7459 19.4047 21.7459C18.8855 21.7459 17.6225 19.8394 16.8734 17.6578C16.7266 17.2338 16.5793 17.0625 16.1879 17.0625Z" fill="#FFE5B5"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 0C32.598 0 42 9.40202 42 21C42 32.598 32.598 42 21 42C9.40202 42 0 32.598 0 21C0 9.40202 9.40202 0 21 0ZM10.5 20.5625C10.5 15.819 10.5 13.4472 11.9736 11.9736C13.4472 10.5 15.819 10.5 20.5625 10.5H21.4375C26.181 10.5 28.5528 10.5 30.0264 11.9736C31.5 13.4472 31.5 15.819 31.5 20.5625V21.4375C31.5 26.181 31.5 28.5528 30.0264 30.0264C28.5528 31.5 26.181 31.5 21.4375 31.5H20.5625C15.819 31.5 13.4472 31.5 11.9736 30.0264C10.5 28.5528 10.5 26.181 10.5 21.4375V20.5625Z" fill="#FFE5B5"/>
                    </svg>
                </a>
            </div>
            <form id="register">
                <p class="p2">or use your Email address </p>
                <div class="input-valid">
                    <input class="entryfield mail" autocomplete="off" placeholder="E-mail"
                           name="email">
                    <p>The email you entered is incorrect. Try again.</p>
                </div>
                <div class="input-valid">
                    <input class="entryfield password-type password" autocomplete="off" type="password" placeholder="Password"
                           name="password">
                    <p>Use 6-40 symbols, except spaces, <, >, ', "</p>
                    <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                    <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                </div>
                <div class="input-valid">
                    <input class="entryfield password-type password-confirm" autocomplete="off" type="password" placeholder="Confirm Password"
                           >
                    <p>The passwords entered do not match. Please re-enter your password.</p>
                    <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                    <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                </div>
                <div class="d-flex box-check-ico">
                    <label class="check-ico">
                        <input class="consent" type="checkbox" checked name="agreement" value="true"
                               autocomplete="off" required>
                        <span class="d-flex align-items-center"></span>
                    </label>
                    <p class="politic">By signing up, you agree to our
                        <a target="_blank" href="https://hero-wars.com/policy/terms/en">Terms of Service</a>,
                        <a target="_blank" href="https://hero-wars.com/policy/privacy/en">Privacy and Cookie Policy</a>.</p>
                </div>
                <button type="button" class="hero-button">
                    <p class="h3">Play FREE!</p>
                    <img src="assets/back_button.png" alt="hero-wars">
                </button>
                <p class="d-flex already-account">Already have an account? <span id="open-login">Log In</span></p>
            </form>
            <form id="login">
                <div class="input-valid">
                    <input class="entryfield mail" autocomplete="off" placeholder="E-mail"
                           name="email">
                    <p>Field is required.</p>
                    <p class="sign-up">Couldn’t find an account associated with this email. Want to
                </div>
                <div class="input-valid">
                    <input class="entryfield password-type password" autocomplete="off" type="password" placeholder="Password"
                           name="password">
                    <p>Use 6-40 symbols, except spaces, <, >, ', "</p>
                    <p>Your password is incorrect.</p>
                    <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                    <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                </div>
                <p class="forgot-password">Forgot password?</p>
                <button type="button" class="hero-button">
                    <p class="h3">Play FREE!</p>
                    <img src="assets/back_button.png" alt="hero-wars">
                </button>
                <p class="d-flex already-account">Don't have an account? <span class="open-register">Register now</span></p>
            </form>
            <form id="reset">
                <div class="input-valid">
                    <input class="entryfield mail" autocomplete="off" placeholder="E-mail"
                           name="login">
                    <p>Field is required.</p>
                </div>
                <button type="button" class="hero-button">
                    <p class="h3">Reset</p>
                    <img src="assets/back_button.png" alt="hero-wars">
                </button>
                <p class="d-flex already-account">Don't have an account? <span class="open-register">Register now</span></p>
            </form>
            <form id="updatepassword">
                <p class="desc-modal">Enter your new password</p>
                <div class="input-valid">
                    <input class="entryfield password password-new" autocomplete="off" type="password" placeholder="Password"
                           name="password">
                    <p>Use 6-40 symbols, except spaces, <, >, ', "</p>
                    <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                    <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                </div>
                <div class="input-valid">
                    <input class="entryfield password password-confirm" autocomplete="off" type="password" placeholder="Password"
                           name="password">
                    <p>The passwords entered do not match. Please re-enter your password.</p>
                    <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                    <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                    </svg>
                </div>
                <button type="button" class="hero-button">
                    <p class="h3">Save</p>
                    <img src="assets/back_button.png" alt="hero-wars">
                </button>
                <p class="d-flex already-account">Don't have an account? <span class="open-register">Register now</span></p>
            </form>

        </div>
</div>


</div>

<script defer src="/js/app.js"></script>
</body>
</html>
