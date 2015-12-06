<?php /*%%SmartyHeaderCode:183840934956601114dcc744-16421571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3ce5a41c899eb02f43087296411bc1e51f8fdd' => 
    array (
      0 => './templates/zamowienia.tpl',
      1 => 1418633321,
      2 => 'file',
    ),
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1422392769,
      2 => 'file',
    ),
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1418629590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183840934956601114dcc744-16421571',
  'variables' => 
  array (
    'zamowienie' => 0,
    'lista' => 0,
    'l' => 0,
    'id_ostatnie_zam' => 0,
    'kadr' => 0,
    'obraz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56601114e7a015_87041702',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56601114e7a015_87041702')) {function content_56601114e7a015_87041702($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>Panel Administracyjny - Allegro.Kamedia.pl</title>
<meta name="description" content="Fototapeta na wymiar drukowana z twoich zdjęć lub zdjęć z banku zdjęć">
<meta name="keywords" content="fototapeta, fototapeta kuchenna,fototapety laminowane, druk na życzenie, obrazy na płótnie twojego zdjęcia" >
<meta name="author" content="Kamedia.pl" >
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta http-equiv="Content-Language" content="pl">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css"  href="css/base.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="css/tooltip.css">
		<link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.imgareaselect.pack.js"></script>
		<script type="text/javascript" src="js/tooltip.js"></script>
  		<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(){
	});
</script>    
<script type="text/javascript">    
	$('.dropdown-toggle').dropdown()
</script>
			

</head>

<body>
	<div class="container" style="height: 10px;">
            </div>
	
<div id="wraper">  
	<div class="menu" style="width: 393px;"> 
    <ul >
        <li><a href="foldery.php"> ../galeria</a></li>
		<li><a href="baza.php"> baza</a></li>
                <li><a href="dodaj.php"> dodaj</a></li>
		<li><a href="zamowienia.php">zamówienia</a></li>
        <li><a href="http://allegro.pl/listing/user/listing.php?us_id=27640620"> aukcje</a></li>
    </ul>
</div>		
    <div id="logo"><a href="index.php"><img src="images/logo.png" alt="logo kamedia"></a></div>
<img src="images/gwiazdki.jpg" alt="gwiazdki">
normalne
<div class="container">
	<div class="row">	
        <div class="col-lg-2 text-left">
       <ul> Lista - malinka
                
         
         <li><a href="zamowienia.php?id=3039">2613 - 2015-11-30<br></a></li>
                 
         
         <li><a href="zamowienia.php?id=3050">2613 - 2015-11-30<br></a></li>
                </ul>
        </div>
		
        <div class="col-lg-10 text-center">		
			<h4>ilość zamówień 3059</h4>
<a href="zamowienia.php?id=3049"><< prev</a> <a href="zamowienia.php?id=3051"> next>></a>              
                        
 <form class="form form-control" action="zamowienia.php" method="get" style="height: 60px; border: 0px solid black; box-shadow: 0 0 0;">
		<input type="text" name="id" class="input">
		<button type="submit" class="btn btn-primary btn-info ">zobacz zamówienie</button>
		<input type="hidden" id="x1" name="kadr" value="0">
		<input type="hidden" id="y1" name="kadr" value="0">
		<input type="hidden" id="x2" name="kadr" value="900">
		<input type="hidden" id="y2" name="kadr" value="205"> 
             	</form>
		
			<div class="col-lg-7">
			<div class="thumbnail"  style="width: 100%; float: left;">
			<a href="#"><img src="../galeria/panoramy/_137440528714631.jpg" class="" alt="" id="photo"></a>
		<div class="caption">_137440528714631.jpg id=2613 szer_min900 wys_min206</div> 
			</div>
			<div>
				
			  id obrazu = 2613 plik = _137440528714631.jpg<br>
			  szer_orginału =13782 wys_orginału =3167<br>
			  katalog ../galeria/panoramy<br>
			  kategoria = 15			
			</div>
			</div>
			<div class="col-lg-5">
			<h3>zamówienie = 3050</h3>
                        
			<h4 class="text-danger">login malinka</h4>
                        data  2015-11-30<br> 
			czas  09:34:03<br>
                        ip      94.254.198.212<br>
			email  epiatkowska2@tlen.pl<br>
			materiał lateksowa laminowana matt<br>
			szerokość 263 cm<br>
			wysokość 60 cm<br>
			kadr (0,0) (900,205)<br>
			efekt grayscale<br>
			obraz id 2613<br>
			</div>
		</div>	
</div>
</div>



<script type="text/javascript">
$(window).load(function(){
	var ias = $('#photo').imgAreaSelect({ 
		show: true,
		instance: true,
		handles: true,
		onSelectEnd: size2crop 
	});
	size2crop();
	
		function size2crop() {
			var x1 = $('input#x1').val();
			var y1 = $('input#y1').val();
			var x2 = $('input#x2').val();
			var y2 = $('input#y2').val();
		ias.setSelection(x1, y1, x2, y2, true);
		ias.setOptions({
		});
		ias.update();
	}
	
});	

</script>




<div class="content" style="margin-top: 10px;">	  
<div id="tel" style="float: left; width: 270px; margin-left: 10px;">
	<p style="float: right; text-align: right;font-size: 12px;">
        <i class="icon-volume-up" style="margin-right: 20px;"></i><span class="text-info"  ><strong>Kontakt telefoniczny</strong></span><br>
				pon.- pt. w godzinach 9:00 - 17:00<br>
				tel. 518 452 666
	</p>
</div>

<div id="e_mail" style="float: left; width: 250px; margin-right: 10px;">
	<p style="float: right; text-align: right; font-size: 12px;">
			<a title="" href="mailto:info@kamedia.pl"><i class="icon-envelope" style="margin-right: 20px;"></i></a><span class="text-info" ><strong>Napisz do nas</strong></span><br>
			odpowiemy jak najszybciej<br>
			na każde Twoje pytanie
	</p>		
</div>

</div>

</div>
<div id="bottom" >
<div id="copyright" style="float: contour; margin-top: 30px">	Copyright © 2012 Kamedia.pl </div>
</div>
</body>
</html><?php }} ?>