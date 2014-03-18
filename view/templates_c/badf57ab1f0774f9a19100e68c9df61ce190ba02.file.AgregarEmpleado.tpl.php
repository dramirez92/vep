<?php /* Smarty version Smarty-3.1.14, created on 2014-03-14 03:31:31
         compiled from "view\templates\AgregarEmpleado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5265531b6425f29ee6-10521483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'badf57ab1f0774f9a19100e68c9df61ce190ba02' => 
    array (
      0 => 'view\\templates\\AgregarEmpleado.tpl',
      1 => 1394417510,
      2 => 'file',
    ),
    '66a8c2ff066aaf66c9998bd03de492a82f694cc6' => 
    array (
      0 => 'view\\templates\\base.tpl',
      1 => 1394335643,
      2 => 'file',
    ),
    '884f48beb8209f6d8de3a031ff4e96496a091e30' => 
    array (
      0 => 'view\\templates\\top_menu.tpl',
      1 => 1394764281,
      2 => 'file',
    ),
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1394764059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5265531b6425f29ee6-10521483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531b6426370e78_77664094',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531b6426370e78_77664094')) {function content_531b6426370e78_77664094($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title> .:: VEP EVENTS ::. </title> 


        <!-- For Mobiles  -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap.css">



        <!-- Java Script  -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery-1.10.2.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap.min.js"></script>

</head>
<body>
   
    
            <?php /*  Call merged included template "top_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5265531b6425f29ee6-10521483');
content_53226a03d73d66_91901603($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "top_menu.tpl" */?>
    

    <?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)){?>
    <div class="alert alert-error" >
        <button type="button" class="close" data-dismiss="alert">×</button>
       
        <strong><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</strong> 
    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['info_message']->value)){?>
    <div class="alert alert-info" >
        <button type="button" class="close" data-dismiss="alert">×</button>
      
        <strong><?php echo $_smarty_tpl->tpl_vars['info_message']->value;?>
</strong> 
    </div>
    <?php }?>
    
    <div class="container">
        
  

  <marquee  scrolldelay="1" scrollamount="2" direction="left" loop="infinite" onmouseout="this.start()" onmouseover="this.stop()"><a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.jpg" height ="200px" width="200px"/></a><a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ferrari.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ferrari.jpg" height ="200px" width="200px" /></a></marquee>


    

        
                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '5265531b6425f29ee6-10521483');
content_53226a03daf339_27597694($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-03-14 03:31:31
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53226a03d73d66_91901603')) {function content_53226a03d73d66_91901603($_smarty_tpl) {?>
<div   align="middle"    >

		<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.jpg"     width="550"    height="250">



</div>


<div   align="right">

	<ul  style="background:#A4A4A4"  class=" nav-pills nav-justified" >
  <li><a   style="color:#FFFF00"  href="#"> <H4><FONT FACE="COOPER BLACK">HOME</FONT><H4> </a></li>
  <li><a  style="color:#1F15E1"  href="#"><H4><FONT FACE="COOPER BLACK">DECORATIONS</FONT><H4></a></li>
  <li><a  style="color:#FF0117"  href="#"><H4><FONT FACE="COOPER BLACK">CONTACT</FONT><H4></a></li>

  
  </ul>


</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-03-14 03:31:31
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53226a03daf339_27597694')) {function content_53226a03daf339_27597694($_smarty_tpl) {?>
<nav class="navbar navbar-default" role="navigation"   style="background:#A4A4A4">
  <div class="container-fluid">
  

<footer style="" class="container" >
        <p align="center"  style="color:#F4FA58"  <H4>  <FONT FACE="COOPER BLACK">  COPYRIGHT © VEP EVENTS FLOWER MOUND PRIVACY POLICY<H4><FONT>  
        							
</footer>


<footer style="" class="container" >
        <p align="center"  style="color:#0404B4"  <H4>  <FONT FACE="COOPER BLACK"> DESIGN BY JOSÉ A. SUÁREZ O. COMPUTER ENGINEER<H4><FONT>  
        							
</footer>



<footer style="" class="container" >
        <p align="center"  style="color:#FF0000"  <H4>  <FONT FACE="COOPER BLACK"> INGJASO@HOTMAIL.COM       <H4><FONT>  
        							
</footer>


    </div>

</nav>
<?php }} ?>