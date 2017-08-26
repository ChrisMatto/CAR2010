<?php
/* Smarty version 3.1.30, created on 2017-08-26 19:14:16
  from "C:\Program Files (x86)\Ampps\www\CAR2010\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a1ba781ae6b0_20935841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77cb14cbe719dce04cd8b432813ad18dbd7d234a' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\CAR2010\\templates\\index.tpl',
      1 => 1503771183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a1ba781ae6b0_20935841 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="include/css/bootstrap.min.css">
<link rel="stylesheet" href="include/css/style.css">


</head>

<body>

<!-- Preloader with Bootstrap Progress Bar -->
<div class='loader'>
  <div class='loader-container'>
    <h3><b>Please wait a moment while we are preparing the content !</b></h3>
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar'></div>
    </div>
  </div>
</div>


<!-- Landing Page -->
<div class="container-full">

      <div class="row">
       
        <div class="col-lg-12 text-center v-center">
          
          <h1>Hello this is Landing Page</h1>
          <p>You just see a progress bar</p>
          <h1>Try to load HD Image below</h1>         
          <br><br><br>
          <br><br><br>
        </div>
        
      </div> <!-- /row -->
  <div>
  <img src="http://p1.pichost.me/i/9/1320769.jpg"/>
  </div>
        
  
  	<br><br><br><br><br>
</div>


<!-- jQuery library -->
<?php echo '<script'; ?>
 src="include/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>

<!-- Latest compiled JavaScript -->
<?php echo '<script'; ?>
 src="include/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="include/js/preloader.js"><?php echo '</script'; ?>
>

</body><?php }
}
