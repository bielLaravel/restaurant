<style>
/*
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
*/

body {
    font-size: 15px;
    line-height: 1.52;
    color: #717f86;
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    overflow-x: hidden;
}

ol,
ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

#banner {
    background: url(../img/banner-bg.jpg) no-repeat center top;
    background-size: cover;
    min-height: 630px;
}

.bg-color {
    background-color: RGBA(0, 0, 0, 0.61);
    min-height: 630px;
}

#banner h2 {
    font-family: 'Satisfy', sans-serif;
    font-size: 45px;
    color: #FFB03B;
}

#banner p {
    font-family: 'PT Sans', sans-serif;
    color: #fcfcfc;
    font-size: 34px;
}

.section-padding {
    padding: 60px 0px;
}

.logo-name {
    font-family: 'Satisfy', sans-serif;
    font-size: 65px;
    margin-top: 140px;
    color: #FFB03B;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 60px;
    transition: 0.5s;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover,
.offcanvas a:focus {
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 20px;
}

.menu-icon {
    color: #fff;
    font-size: 30px;
    margin-top: 30px;
    cursor: pointer;
}

.header-h {
    color: #FFB03B;
    font-size: 46px;
    font-family: 'Satisfy', sans-serif;
    font-weight: 300;
}

.header-p {
    color: #9699a6;
    font-size: 16px;
}

.msg-row {
    margin-top: 56px;
}

.media-body,
.media-left,
.media-right {
    display: table-cell;
    vertical-align: top;
}

.bg-13 {
    background-color: #f04e4e;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.contact-icon {
    color: #fff;
    position: absolute;
    left: 34px;
    font-size: 32px;
    margin-top: 18px;
}

.bg-1 {
    background-color: #fecc17;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.bg-14 {
    background-color: #ccdb38;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.dark-blue {
    color: #31364c;
    font-size: 24px;
    margin-top: 0;
}

.light-blue {
    color: #9699a6;
    font-size: 16px;
    margin-bottom: 1px;
}

.media-body {
    margin-left: 10px;
    padding-left: 13px;
}

.media-2 {
    margin-top: 30px;
}

.newinput .form-group {
    margin: 8px 0 9px !important;
    padding-bottom: 10px;
}

.contact-form .form-control {
    color: #000 !important;
    font-size: 16px;
    font-weight: normal;
    height: 38px;
    line-height: 1.42857;
    padding: 7px 0;
}

.form-control,
.form-group .form-control {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#009688), to(#009688)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#009688, #009688), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#009688, #009688), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#009688, #009688), linear-gradient(#D2D2D2, #D2D2D2);
    -webkit-background-size: 0 2px, 100% 1px;
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center -webkit-calc(100% - 1px);
    background-position: center bottom, center calc(100% - 1px);
    background-color: rgba(0, 0, 0, 0);
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    float: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
}

.contact-form {
    margin: 8px 0 9px !important;
    padding-bottom: 10px;
}

.contact-form textarea.form-control {
    color: #000 !important;
    height: auto;
}

.contacts-btn {
    background-color: #FFB03B !important;
    color: #ffffff !important;
    width: 170px;
    height: 54px;
    border-radius: 3px;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    font-weight: normal;
    text-transform: capitalize;
    border: 0px;
    color: #000 !important;
}

.validation {
    color: red;
    display: none;
    margin: 0 0 20px;
    font-weight: 400;
    font-size: 13px;
}

#sendmessage {
    color: green;
    border: 1px solid green;
    display: none;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
}

#errormessage {
    color: red;
    display: none;
    border: 1px solid red;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
}

#sendmessage.show,
#errormessage.show,
.show {
    display: block;
}

.phone-in-talk,
.hour-icon {
    font-size: 35px;
    line-height: 70px;
    color: rgb(255, 255, 255);
}


.heading {
    font-family: 'Satisfy', sans-serif;
    color: #FFB03B;
    font-size: 24px;
}

.marb-35 {
    margin-bottom: 35px;
}

.details-list {
    margin-top: 20px;
}

.details-list ul li i {
    margin-right: 10px;
    color: #ffb03b;
}

#about img {
    border: 5px solid rgb(255, 176, 59);
    border-radius: 2px;
}

#event {
    background: url('../img/res02.jpg') no-repeat;
    background-size: cover;
}

.left-images img {
    height: 308px;
    width: 100%;
}

.left-images {
    padding: 0px;
}

.details-text {
    border-right: 2px solid #841b2d;
}

.details-text {
    background-color: rgba(14, 4, 4, 0.70);
    border-right: 2px solid #A87F41;
    padding: 20px 20px 30px 30px;
    overflow: auto;
}

.content-holder h2 {
    color: #FFB03B;
    font-size: 32px;
    padding-bottom: 15px;
    font-family: 'Satisfy', sans-serif;
}

.content-holder address strong {
    color: #FFB03B;
    padding: 10px 0px;
}

.details-text p {
    color: #E8E8E8;
    line-height: 26px;
    letter-spacing: 1px;
    font-weight: 300;
}

.btn-read-more {
    background: #FFB03B;
    padding: 7px 19px;
    font-family: 'Roboto', sans-serif;
    font-size: 12px;
    line-height: 17px;
    font-weight: 400;
    letter-spacing: 1px;
    border-radius: 3px;
    color: #000;
    text-transform: uppercase;
    margin-top: 10px;
}

.btn-read-more:hover {
    color: #000;
}

#Container .mix {
    display: none;
}

.menu-restaurant {
    width: 50%;
    float: left;
    padding: 15px;
    position: relative;
}

.menu-restaurant .menu-title {
    float: left;
    font-family: Montserrat, arial;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #FFB03B;
}

.menu-restaurant .menu-line {
    position: absolute;
    bottom: 6px;
    border-bottom: 1px dotted rgba(0, 0, 0, .3);
    margin-left: .6rem;
    margin-right: .6rem;
}

.menu-restaurant .menu-price {
    font-weight: 600;
    position: absolute;
    right: 0;
    top: 0;
}

.menu-restaurant .menu-subtitle {
    display: block;
    float: left;
    color: #B1B1B1;
    font-family: Satisfy, 'Open Sans', arial;
    font-size: 1.2rem;
}

.menu-restaurant span.clearfix {
    position: relative;
    display: block;
}

#menu-flters ul li a.active,
#menu-flters ul li a:hover {
    background: #FFB03B;
    color: #fff;
    border: 1px solid #FFB03B;
}

#menu-flters ul li {
    display: inline-block;
    color: #fff;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 40px;
}

#menu-flters ul li a {
    padding: 10px 20px;
    font-size: 14px;
    color: #565656;
    border-radius: 0px;
    border: 1px solid #BBBBBB;
    text-decoration: none;
    cursor: pointer;
}

.footer {
    width: 100%;
    background-color: #222;
    position: relative;
    z-index: 1;
}

.footer a {
    color: #fff;
}

.footer .footer-top {
    padding-top: 9rem;
    padding-bottom: 5rem;
}

.footer .widget-title,
.footer .widget-title a {
    font-size: 1.4rem;
    font-weight: 700;
    letter-spacing: 0.2rem;
    color: #999;
}

.footer .widget-title {
    padding-bottom: 20px;
    font-family: 'Satisfy', sans-serif;
    font-size: 44px;
    color: #FFB03B;
}

.footer .widget,
.footer address {
    color: #999;
    text-transform: none;
    font-style: normal;
    padding-bottom: 15px;
}

.footer .navigation,
.footer .social-list {
    float: none;
    margin-bottom: 20px;
}

.list-horizontal li {
    display: inline-block;
}

#contact {
    background-color: rgba(221, 221, 221, 0.33);
}

.footer .social-list a {
    font-size: 32px;
    font-weight: normal;
    color: #fff;
    text-transform: uppercase;
    margin: 0 5px;
}

@media (min-width: 768px) and (max-width: 980px) {
    .content-holder h2 {
        font-size: 23px;
    }

    .details-text p {
        line-height: 16.6px;
    }
}

@media (min-width: 451px) and (max-width: 767px) {
    .details-text {
        border: 0px;
        border-bottom: 2px solid #A87F41;
    }
}

@media (min-width: 20px) and (max-width: 450px) {
    .menu-restaurant {
        width: 100%;
    }

    .details-text {
        border: 0px;
        border-bottom: 2px solid #A87F41;
    }

    .header-h {
        font-size: 35px;
    }

    .header-p,
    body {
        font-size: 14px;
    }

    .about-info,
    .mr-15 {
        margin-bottom: 15px;
    }

    #banner h2 {
        font-size: 25px;
    }

    #banner p {
        font-size: 25px;
    }

    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}

#bookBackground {
    background-color: #F0F0F0;
}

#textContact {
    color: #FFC107 !important;
    font-size: 50px;
}

.text-warning {
    color: #FFC107 !important;
}

.btn-warning {
    background-color: #FFC107 !important;

}

.newinput .form-group {
    margin: 8px 0 9px !important;
    padding-bottom: 10px;
}

.contact-form .form-control {
    color: #000 !important;
    font-size: 16px;
    font-weight: normal;
    height: 38px;
    line-height: 1.42857;
    padding: 7px 0;
}

.form-control,
.form-group .form-control {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#009688), to(#009688)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#009688, #009688), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#009688, #009688), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#009688, #009688), linear-gradient(#D2D2D2, #D2D2D2);
    -webkit-background-size: 0 2px, 100% 1px;
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center -webkit-calc(100% - 1px);
    background-position: center bottom, center calc(100% - 1px);
    background-color: rgba(0, 0, 0, 0);
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    float: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
}

.contact-form {
    margin: 8px 0 9px !important;
    padding-bottom: 10px;
}

.contact-form textarea.form-control {
    color: #000 !important;
    height: auto;
}

.contacts-btn {
    background-color: #FFB03B !important;
    color: #ffffff !important;
    width: 170px;
    height: 54px;
    border-radius: 3px;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    font-weight: normal;
    text-transform: capitalize;
    border: 0px;
    color: #000 !important;
}




.gallery {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-width: 33%;
    -moz-column-width: 33%;
    column-width: 33%;
}

.gallery .pics {
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
}

.gallery .animation {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

@media (max-width: 450px) {
    .gallery {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
        -webkit-column-width: 100%;
        -moz-column-width: 100%;
        column-width: 100%;
    }
}

@media (max-width: 400px) {
    .btn.filter {
        padding-left: 1.1rem;
        padding-right: 1.1rem;
    }
}

figure {
    margin: 0px !important;
    padding: 0px !important;


}

#flex-img {
    display: flex;
    flex-wrap: wrap;
}
.borderBTN{
    border: 1px solid white !important;
    margin-right: 5px;
    border-radius: 0% !important;
}
.header {
    background-image: url('https://images.pexels.com/photos/1565982/pexels-photo-1565982.jpeg?cs=srgb&dl=burger-and-vegetables-placed-on-brown-wood-surface-1565982.jpg&fm=jpg ');
    background-size: cover;
    height: 700px;
    background-color:red;
}
#proves{
    margin-top:150px !important;
}
.card{
 width:25% !important;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <script src="https://use.fontawesome.com/8f61250dce.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    
    <div class="header">
    
    <nav id="nav" class="navbar text-dark justify-content-between">
        <a class="text-white font-weight-bold display-4 ml-3 mt-4" href="#">CAL XORIGUER</a>
        <form class="form-inline my-1 mt-4 mr-5">
            <button class="borderBTN btn  text-white my-0" type="text">home</button>
            <button class="borderBTN btn btn-outline-white  text-white my-0" type="text">menu</button>
            <button class="borderBTN btn btn-outline-white  text-white my-0" type="text">book</button>
            <button class=" borderBTN btn btn-outline-white   text-white my-0" type="text">contact</button>

        </form>
    </nav>
        <div id="proves" class="col-md-12 position-absolute">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 mt-5">
                        <h1 class="text-white display-3">EAT REAL FOOD</h1>
                    </div>
                    <div class="col-md-12 ml-2">
                        <button type="button" class="btn btn-light">Book now</button>
                        <button id="button1" type="button" class="btn text-white">khow more</button> </div>
                </div>
            </div>
        </div>
    </div>
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div>

                <div class="col-md-12  text-center" id="menu-flters">
                    <ul>
                        <li><a class="filter active" data-filter=".breakfast">Menu cap de setmana</a></li>
                      
                    </ul>
                </div>

                <div id="menu-wrapper">

                    <div class="breakfast menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="breakfast menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="breakfast menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="breakfast menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="lunch menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="lunch menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="lunch menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="lunch menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="lunch menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="dinner menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="dinner menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>

                    <div class="dinner menu-restaurant">
                        <span class="clearfix">
                            <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food
                                Item
                                Name</a>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">$20.99</span>
                        </span>
                        <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div id="flex-img" class="mdb-lightbox no-margin">

                <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg"
                        data-size="1600x1067">
                        <img alt="picture"
                            src="https://images.pexels.com/photos/264537/pexels-photo-264537.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            class="img-fluid">
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg"
                        data-size="1600x1067">
                        <img alt="picture"
                            src="https://images.pexels.com/photos/264537/pexels-photo-264537.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg"
                        data-size="1600x1067">
                        <img alt="picture"
                            src="https://images.pexels.com/photos/264537/pexels-photo-264537.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg"
                        data-size="1600x1067">
                        <img alt="picture"
                            src="https://images.pexels.com/photos/1028599/pexels-photo-1028599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg"
                        data-size="1600x1067">
                        <img alt="picture"
                            src="https://images.pexels.com/photos/1028599/pexels-photo-1028599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg"
                        data-size="1600x1067">
                        <img alt="picture"
                            src="https://images.pexels.com/photos/1028599/pexels-photo-1028599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            class="img-fluid" />
                    </a>
                </figure>

            </div>

        </div>
    </div>
    <!-- Grid row -->
    <section class="probootstrap-section mt-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="probootstrap-section mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <form method="get" class="probootstrap-form" action="/biel/public/bookSave">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Persons</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar"></i>
                                        <input type="text" name="persons" id="date" placeholder="Number of guests" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar"></i>
                                        <input type="text" name="date" id="date" placeholder="Date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <div class="form-field">
                                        <i class="icon icon-clock"></i>
                                        <input type="text" name="time" id="time" placeholder="time" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <div class="form-field">
                                        <i class="icon icon-user2"></i>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your full name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="form-field">
                                        <i class="icon icon-mail"></i>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Your email address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <div class="form-field">
                                        <i class="icon icon-phone"></i>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="submit" id="submit" value="Submit"
                                    class="btn btn-lg btn-warning btn-block">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- ABOUT US-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div>
 


    <!-- / contact -->
    <div class="container">
    <div class=" py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://ecocesta.com/wp-content/uploads/2018/11/logo-300x250-ok.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://shopichigo.com/wp-content/uploads/2019/06/vegan-logo-text-only.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</div></div>

<section id="bookBackground" class="probootstrap-section mt-5" data-section="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-center probootstrap-animate">
                    <div class="probootstrap-heading dark">
                        <h1 id="textContact" class="primary-heading text-warning mt-5">Contact</h1>
                        <h3 class="secondary-heading">Let's Chat</h3>
                    </div>
                    <p>Voluptatibus quaerat laboriosam fugit non Ut consequatur animi est molestiae enim a
                        voluptate
                        totam natus modi debitis dicta impedit voluptatum quod sapiente illo saepe explicabo
                        quisquam
                        perferendis labore et illum suscipit</p>
                </div>
                <div class="col-md-6 col-md-push-1 probootstrap-animate">
                    <form method="post" class="probootstrap-form mt-5">
                        <div class="form-group">
                            <label for="c_name">Your Name</label>
                            <div class="form-field">
                                <input type="text" id="c_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c_email">Your Email</label>
                            <div class="form-field">
                                <input type="text" id="c_email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c_message">Your Message</label>
                            <div class="form-field">
                                <textarea name="c_message" id="c_message" cols="10" rows="5"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class=" form-group">
                            <input type="submit" name="c_submit" id="c_submit" value="Send Message"
                                class="btn  text-dark btn-warning btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- Footer -->
<footer class="page-footer text-center font-small cyan bg-dark p-5">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic text-white">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic text-white">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic text-white">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic text-white">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic text-white">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic text-white">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark text-white ">© 2020 Copyright:
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
@if (session('errorMessage'))
<div class="alert alert-danger">
    {{ session('errorMessage') }}
</div>
@endif