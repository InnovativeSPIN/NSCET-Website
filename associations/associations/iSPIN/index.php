<?php ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSPIN</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/nav_styles.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/ani_name.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/jGravity.js"></script>


    <script>
    $(document).ready(() => {
        $('button.start_btn').on('click',
            () => {
                $('.logo').css("opacity", 0.75);
                $('.start_btn').css("display", "none");
                $('body').jGravity({
                    target: '.logo',
                    ignoreClass: 'ignoreMe',
                    weight: 20,
                    depth: 1,
                    drag: true
                });



                $(this).removeClass('jGravity');
                $(this).delay(1000).queue(() => {
                    $(this).html(
                        "<h2><a href='http://tinybigideas.com/plugins/jquery-gravity/'>Get jGravity</a></h2>"
                    );
                });


            });
    });
    </script>
</head>

<body>
    <?php 
        include('navigation.php');
    ?>
    <div class="clg-logo">
        <a href="https://nscet.org/"><img src="./assets/img/NSCET_Logo.png" alt=""></a>
    </div>
    <div class="hero">
        <div class="main-name">
            <h1>Innovative<br>Software&nbsp;Product&nbsp;Industry&nbsp;of&nbsp;NSCET</h1>
        </div>
        <div class="ani-name">
            <h1 class="cd-headline clip">
                <span class="blc">We&nbsp;</span>
                <span class="cd-words-wrapper">
                    <b class="is-visible">learn</b>
                    <b>play&nbsp</b>
                    <b>innovate</b>
                    <b>build</b>
                    <b>develope</b>
                </span>
            </h1>
        </div>
    </div>

    <div class="notify-bottom">
        <img src="./assets/img/Notif.svg" alt="">
    </div>
    <div class="foot">
        <p>
            &copy;Copyright&nbsp;<a href="https://nscet.org/">NSCET</a>
        </p>
    </div>
    <div class="contact">
        <a href="https://github.com/InnovativeSPIN"><i class="bi bi-github"></i></a>
        <a href="mailto:cseispin@gmail.com"><i class="bi bi-envelope"></i></a>
    </div>
    <div>
        <button class="start_btn btn">let's START</button>
    </div>

    <div class="logos">
        <div>
            <img class="logo logo1" src="./assets/img/logos/1.png" alt="">
        </div>
        <div>
            <img class="logo logo2" src="./assets/img/logos/2.png" alt="">
        </div>
        <div>
            <img class="logo logo3" src="./assets/img/logos/3.png" alt="">
        </div>
        <div>
            <img class="logo logo4" src="./assets/img/logos/4.png" alt="">
        </div>
        <div>
            <img class="logo logo5" src="./assets/img/logos/5.png" alt="">
        </div>
        <div>
            <img class="logo logo6" src="./assets/img/logos/6.png" alt="">
        </div>
        <div>
            <img class="logo logo7" src="./assets/img/logos/7.png" alt="">
        </div>
        <div>
            <img class="logo logo8" src="./assets/img/logos/8.png" alt="">
        </div>
        <div>
            <img class="logo logo9" src="./assets/img/logos/9.png" alt="">
        </div>
        <div>
            <img class="logo logo10" src="./assets/img/logos/10.png" alt="">
        </div>
        <div>
            <img class="logo logo11" src="./assets/img/logos/11.png" alt="">
        </div>
        <div>
            <img class="logo logo12" src="./assets/img/logos/12.png" alt="">
        </div>
        <div>
            <img class="logo logo13" src="./assets/img/logos/13.png" alt="">
        </div>
        <div>
            <img class="logo logo14" src="./assets/img/logos/14.png" alt="">
        </div>
        <div>
            <img class="logo logo15" src="./assets/img/logos/15.png" alt="">
        </div>
        <div>
            <img class="logo logo16" src="./assets/img/logos/16.png" alt="">
        </div>
        <div>
            <img class="logo logo17" src="./assets/img/logos/17.png" alt="">
        </div>
        <div>
            <img class="logo logo18" src="./assets/img/logos/18.png" alt="">
        </div>
        <div>
            <img class="logo logo19" src="./assets/img/logos/19.png" alt="">
        </div>
        <div>
            <img class="logo logo20" src="./assets/img/logos/20.png" alt="">
        </div>
        <div>
            <img class="logo logo21" src="./assets/img/logos/21.png" alt="">
        </div>
        <div>
            <img class="logo logo22" src="./assets/img/logos/22.png" alt="">
        </div>
        <div>
            <img class="logo logo23" src="./assets/img/logos/23.png" alt="">
        </div>
        <div>
            <img class="logo logo24" src="./assets/img/logos/24.png" alt="">
        </div>
        <div>
            <img class="logo logo25" src="./assets/img/logos/25.png" alt="">
        </div>
        <div>
            <img class="logo logo26" src="./assets/img/logos/26.png" alt="">
        </div>
        <div>
            <img class="logo logo27" src="./assets/img/logos/27.png" alt="">
        </div>
        <div>
            <img class="logo logo28" src="./assets/img/logos/28.png" alt="">
        </div>
        <div>
            <img class="logo logo29" src="./assets/img/logos/29.png" alt="">
        </div>
        <div>
            <img class="logo logo30" src="./assets/img/logos/30.png" alt="">
        </div>
        <div>
            <img class="logo logo31" src="./assets/img/logos/31.png" alt="">
        </div>
        <div>
            <img class="logo logo32" src="./assets/img/logos/32.png" alt="">
        </div>
    </div>

    <script src="./assets/js/ani_name.js"></script>
</body>

</html>