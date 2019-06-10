<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
            @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

            body{
                margin: 0;
                padding: 0;
                background: #fff;

                color: #fff;
                font-family: Arial;
                font-size: 12px;
            }

            .alert {
              padding: 15px;
              margin-bottom: 20px;
              border: 1px solid transparent;
              border-radius: 4px; }
              .alert h4 {
                margin-top: 0;
                color: inherit; }
              .alert .alert-link {
                font-weight: bold; }
              .alert > p,
              .alert > ul {
                margin-bottom: 0; }
              .alert > p + p {
                margin-top: 5px; }

            .alert-dismissable,
            .alert-dismissible {
              padding-right: 35px; }
              .alert-dismissable .close,
              .alert-dismissible .close {
                position: relative;
                top: -2px;
                right: -21px;
                color: inherit; }

            .alert-warning {
              background-color: #f9e491;
              border-color: #f9e491;
              color: #c29d0b; }
              .alert-warning hr {
                border-top-color: #f7de79; }
              .alert-warning .alert-link {
                color: #927608; }

            .close {
              float: right;
              font-size: 21px;
              font-weight: bold;
              line-height: 1;
              color: #000;
              text-shadow: 0 1px 0 #fff;
              opacity: 0.2;
              filter: alpha(opacity=20); }
              .close:hover, .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
                opacity: 0.5;
                filter: alpha(opacity=50); }

            button.close {
              padding: 0;
              cursor: pointer;
              background: transparent;
              border: 0;
              -webkit-appearance: none; }

            .modal-header .close {
              margin-top: -2px; }

            .body{
                position: absolute;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background-image: url(http://www.semarangkota.go.id//assets/front/img/branding-semarang.png);
                background-size: cover;
                -webkit-filter: blur(5px);
                z-index: 0;
            }

            .grad{
                position: absolute;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
                z-index: 1;
                opacity: 0.7;
            }

            .header{
                position: absolute;
                top: calc(50% - 35px);
                left: calc(50% - 255px);
                z-index: 2;
            }

            .header div{
                float: left;
                color: orange;
                font-family: 'Exo', sans-serif;
                font-size: 35px;
                font-weight: 200;
            }

            .header div span{
                color: red !important;
            }

            .login{
                position: absolute;
                top: calc(50% - 75px);
                left: calc(50% - 50px);
                height: 150px;
                width: 350px;
                padding: 10px;
                z-index: 2;
            }

            .login input[type=email]{
                width: 250px;
                height: 30px;
                background: transparent;
                border: 1px solid orange;
                border-radius: 2px;
                color: black;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 4px;
            }

            .login input[type=password]{
                width: 250px;
                height: 30px;
                background: transparent;
                border: 1px solid rgba(255,255,255,0.6);
                border-radius: 2px;
                color: black;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 4px;
                margin-top: 10px;
            }

            .login input[type=submit]{
                width: 260px;
                height: 35px;
                background: #fff;
                border: 1px solid #fff;
                cursor: pointer;
                border-radius: 2px;
                color: #a18d6c;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 6px;
                margin-top: 10px;
            }

            .login input[type=submit]:hover{
                opacity: 0.8;
            }

            .login input[type=submit]:active{
                opacity: 0.6;
            }

            .login input[type=text]:focus{
                outline: none;
                border: 1px solid orange;
            }

            .login input[type=password]:focus{
                outline: none;
                border: 1px solid red;
            }

            .login input[type=submit]:focus{
                outline: none;
            }

            ::-webkit-input-placeholder{
               color: rgba(255,255,255,0.6);
            }

            ::-moz-input-placeholder{
               color: rgba(255,255,255,0.6);
            }
        </style> 
        <link rel="shortcut icon" href="<?=base_url('assets/hai.ico');?>" />   
    </head>
    <!-- END HEAD -->

    <body >
            <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>Jaldis's<span>App</span></div>
        </div>
        <br>
        <div class="login">
          <h5><?= $this->session->flashdata('error') ?></h5>
          <form action="<?php echo site_url('User/masuk'); ?>" method="post">
                <input type="email" placeholder="email" name="email" maxlength="50"><br>
                <input type="password" placeholder="password" name="password" minlength="5" maxlength="20"><br>
                <input type="submit" value="Login">
          </form>
        </div>
    </body>

</html>