<?php
/* Smarty version 3.1.40, created on 2022-05-10 00:25:34
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_head_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279b0fe422476_41613438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437fb96d7c0cb4203dc2bef64adbefb159025afe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_head_radio.tpl',
      1 => 1652142313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6279b0fe422476_41613438 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#D8D8D8">

  <!-- SEO -->
  <meta name="description" content="Great Twitter of entertainment." />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="" />
  <meta property="og:locale" content="ve_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Zaya Motion | Great Twitter of entertainment." />
  <meta property="og:description" content="Great Twitter of entertainment." />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="Zaya Motion." />
  <meta property="og:image" content="{{ url_for('static', filename='img/redsocial.jpg') }}" />
  <meta property="og:image:width" content="1461" />
  <meta property="og:image:height" content="737" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@zayacorp" />

  <title>Doble Sound</title>

  <!--=============== favicons ===============-->
  <link rel="shortcut icon" href="{{ url_for('static', filename='img/logo.png') }}">

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/css/modals.css">
  <?php if ($_smarty_tpl->tpl_vars['config']->value['wallpaper'] != '' && $_smarty_tpl->tpl_vars['config']->value['type_wallpaper'] == 'video') {?> 
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/css/style-video.css">
  <?php }?>

  <style>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['wallpaper'] != '' && $_smarty_tpl->tpl_vars['config']->value['type_wallpaper'] == 'image') {?>
    body {
      background-image: url(<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/content/uploads/<?php echo $_smarty_tpl->tpl_vars['config']->value['wallpaper'];?>
);
    }
    <?php }?>
  </style>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['config']->value['wallpaper'] != '' && $_smarty_tpl->tpl_vars['config']->value['type_wallpaper'] == 'video') {?>
<section class="container">
  <div class="video-container">

  <video src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/content/uploads/<?php echo $_smarty_tpl->tpl_vars['config']->value['wallpaper'];?>
" autoplay muted loop></video>
  </div>
<div class="contenido">
<?php }?>
<!-- Loading -->
  <div class="loading show">
    <div class="disco">
      <div class="disco--cover"></div>
      <div class="disco--vinilo"></div>
    </div>
  </div>
  <!-- Fin loading -->  <?php }
}
