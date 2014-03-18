<?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 04:58:32
         compiled from "view\templates\HOME.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2746453226a43ad6fa4-12440618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35dcb18921a8961078ddc756835e56182773ba8' => 
    array (
      0 => 'view\\templates\\HOME.tpl',
      1 => 1395005643,
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
  'nocache_hash' => '2746453226a43ad6fa4-12440618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53226a43bfd829_87634131',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53226a43bfd829_87634131')) {function content_53226a43bfd829_87634131($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2746453226a43ad6fa4-12440618');
content_532672e8ea2e02_64522251($_smarty_tpl);
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
           

        
  
  <marquee  scrolldelay="1" scrollamount="4" direction="left" loop="infinite" onmouseout="this.start()" onmouseover="this.stop()">
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto1.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto1.jpg" height ="250px" width="300px"/></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto2.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto2.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto3.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto3.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto4.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto4.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto5.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto5.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto6.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto6.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto7.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto7.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto8.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto8.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto13.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto13.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto14.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto14.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto15.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto15.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto16.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto16.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto17.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto17.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto18.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto18.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto19.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto19.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto20.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto20.jpg" height ="250px" width="300px" /></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto21.jpg" target="_blank"><img title="Titulo de la entrada" alt="Titulo de la entrada"  src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
foto21.jpg" height ="250px" width="300px" /></a>

  </marquee>


<div class="panel panel-default" style="background:#819FF7">
  <div class="panel-heading" style="background:#0404B4" > 
    <h3 class="panel-title"  ><H4><FONT FACE="COOPER BLACK"  style="color:#FFFF00" >VEP EVENTS</FONT><H4></h3>
  </div>
  <div class="panel-body" style="color:#000000">
    <H4><FONT FACE="COOPER BLACK">  Founded on May 2013 by son Pascual and Mother Victoria Pellegrino,  Vep Events is where you walk through the door you are immediately transported into a land of ‘possible dreams’, you get a sense of quality, luxury and capability, for achieving the best goods and services for any event. VEP Events Lewisville's newest and most elegant Ballroom. At VEP Events select from our catalog the arrangement you wish or let us know if you need something special so we can make your dream come true. Our experts will help you make you're especial day Bright just like our motto of "Where You are the Start!!!"  </FONT><H4>
  </div>
</div>




    

     
 


                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2746453226a43ad6fa4-12440618');
content_532672e8f266c4_35705253($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 04:58:32
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_532672e8ea2e02_64522251')) {function content_532672e8ea2e02_64522251($_smarty_tpl) {?>
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


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-03-17 04:58:32
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_532672e8f266c4_35705253')) {function content_532672e8f266c4_35705253($_smarty_tpl) {?>
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