<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wootekh Miracle</title>
        <link rel='shortcut icon' type='image/x-icon' href='  assets/img/favicon.ico'/>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- STYLE -->
        <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- <link href="<?php echo base_url('assets/css/jkit.css')?>" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url('assets/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?php echo base_url('assets/font/fontawesome-webfont.ttf')?>" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url('assets/font/BodoniFLF-Roman.ttf')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" />

        <!-- SCRIPT -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    	<script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    	<script src="<?= base_url('assets/js/jquery.jkit.1.2.16.min.js') ?>"></script>
        <script>
        $(function() {
            var pull = $('#pull');
            var menu = $('.navbar-2');

            $(pull).on('click', function(e) {
              e.preventDefault();
              menu.slideToggle();
            });
          });
        </script>
    </head>
