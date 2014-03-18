<?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 04:50:16
         compiled from "view\templates\DECORATIONS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258935325fcb9b04954-27764935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9b024a8ad0107a9c9c895973de4444a5f35329' => 
    array (
      0 => 'view\\templates\\DECORATIONS.tpl',
      1 => 1395028212,
      2 => 'file',
    ),
    '66a8c2ff066aaf66c9998bd03de492a82f694cc6' => 
    array (
      0 => 'view\\templates\\base.tpl',
      1 => 1395003029,
      2 => 'file',
    ),
    '884f48beb8209f6d8de3a031ff4e96496a091e30' => 
    array (
      0 => 'view\\templates\\top_menu.tpl',
      1 => 1395028132,
      2 => 'file',
    ),
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1395005643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258935325fcb9b04954-27764935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5325fcb9bd1321_79567168',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5325fcb9bd1321_79567168')) {function content_5325fcb9bd1321_79567168($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head >

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
<body  style="background:#819FF7">
   
    
            <?php /*  Call merged included template "top_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '258935325fcb9b04954-27764935');
content_532670f8c21c47_92360131($_smarty_tpl);
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
    
    <div class="container-justified" style="background:#819FF7" >
           

        
  







    

     
 


                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '258935325fcb9b04954-27764935');
content_532670f8c52fa5_24736452($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 04:50:16
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_532670f8c21c47_92360131')) {function content_532670f8c21c47_92360131($_smarty_tpl) {?>
<div   align="middle"  style="background:#819FF7"  >

<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
logo.jpg"     width="550"    height="250" >

		<div  align="right">
				<a href="https://www.google.co.ve/maps/@33.0629,-97.034409,3a,75y,161.14h,80.04t/data=!3m5!1e1!3m3!1sCu77ySyrJN8AAAAGOxwuqA!2e0!3e2" target="_TOP" title="VEP Events Google 360 View Business"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
google360.jpg" style="border: 0px;" width="110"    height="70"/></a>
				<a href="https://www.facebook.com/pages/VEP-Events/323441957795772" target="_TOP" title="VEP Events Instagram"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
instagram.jpg" style="border: 0px;" width="50"    height="50"/></a>
				<a href="https://www.facebook.com/pages/VEP-Events/323441957795772" target="_TOP" title="VEP Events Twitter"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
twitter.jpg" style="border: 0px;" width="50"    height="50"/></a>
				<a href="https://www.facebook.com/pages/VEP-Events/323441957795772" target="_TOP" title="VEP Events Facebook"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
facebook.jpg" style="border: 0px;" width="50"    height="50"/></a>

		</div>


</div>



<div   align="right">

	<ul  style="background:#0404B4"  class=" nav-pills nav-justified" >
  <li><a   style="color:#FFFF00"  href="HOME.php"> <H4><FONT FACE="COOPER BLACK">HOME</FONT><H4> </a></li>
<li><a  style="color:#FFFF00"  href="DECORATIONS.php"><H4><FONT FACE="COOPER BLACK">DECORATIONS</FONT><H4></a></li>
<li><a  style="color:#FFFF00"  href="CONTACT.php"><H4><FONT FACE="COOPER BLACK">CONTACT</FONT><H4></a></li>
  <li><a  style="color:#FFFF00"  href="APPOINTMENT.php"><H4><FONT FACE="COOPER BLACK">SCHEDULE AN APPOINTMENT ONLINE</FONT><H4></a></li>
   

  
  </ul>

</div>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 04:50:16
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_532670f8c52fa5_24736452')) {function content_532670f8c52fa5_24736452($_smarty_tpl) {?>
<nav class="navbar navbar-default" role="navigation"  style="background:#0404B4">
  <div class="container-fluid">
  

<footer style="" class="container" >
        <p align="center"  style="color:#FFFF00"  <H4>  <FONT FACE="COOPER BLACK">  COPYRIGHT © VEP EVENTS FLOWER MOUND PRIVACY POLICY<H4><FONT>  
        							
</footer>


<footer style="" class="container" >
        <p align="center"  style="color:#FFFF00"  <H4>  <FONT FACE="COOPER BLACK"> DESIGN BY JOSÉ A. SUÁREZ O. COMPUTER ENGINEER<H4><FONT>  
        							
</footer>



<footer style="" class="container" >
        <p align="center"  style="color:#FFFF00"  <H4>  <FONT FACE="COOPER BLACK"> INGJASO@HOTMAIL.COM       <H4><FONT>  
        							
</footer>





    </div>

</nav>
<?php }} ?>