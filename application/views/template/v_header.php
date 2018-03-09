<?php
$title = '';
$title .= 'PT. Advance Stabilindo Industry';
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT. Advance Stabilindo Industry" />
    <meta name="keywords" content="PT. Advance Stabilindo Industry" />
    <meta name="author" content="PT. Advance Stabilindo Industry" />
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/mylogo.png'?>">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo base_url().'assets/images/mylogo.png'?>">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/dist/css/lightbox.min.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 

    <!-- Modernizr JS -->
    <script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>
</head>
<body>

 <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>