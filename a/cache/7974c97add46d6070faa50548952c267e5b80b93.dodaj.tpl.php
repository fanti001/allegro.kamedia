<?php /*%%SmartyHeaderCode:3153538015613f4cf02a246-89150582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7974c97add46d6070faa50548952c267e5b80b93' => 
    array (
      0 => './templates/dodaj.tpl',
      1 => 1422393312,
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
  'nocache_hash' => '3153538015613f4cf02a246-89150582',
  'variables' => 
  array (
    'kategorie' => 0,
    'kat' => 0,
    'kategoria' => 0,
    'licznik' => 0,
    'obrazki' => 0,
    'obraz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5613f4cf09d0a8_44543281',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613f4cf09d0a8_44543281')) {function content_5613f4cf09d0a8_44543281($_smarty_tpl) {?><!DOCTYPE html>
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


<div class="container">
	<div class="row">	
        <div class="col-lg-2 text-left">
       <ul> tabela - kategorie
                
            <li><a href="dodaj.php?kat=23">kuchnia id=23</a></li>   
                 
            <li><a href="dodaj.php?kat=5">dla dzieci id=5</a></li>   
                 
            <li><a href="dodaj.php?kat=8">kuchnia 2 id=8</a></li>   
                 
            <li><a href="dodaj.php?kat=2">budowle id=2</a></li>   
                 
            <li><a href="dodaj.php?kat=22">ciekawe id=22</a></li>   
                 
            <li><a href="dodaj.php?kat=1">grafiki id=1</a></li>   
                 
            <li><a href="dodaj.php?kat=7">kawa id=7</a></li>   
                 
            <li><a href="dodaj.php?kat=6">kosmos id=6</a></li>   
                 
            <li><a href="dodaj.php?kat=19">krajobrazy id=19</a></li>   
                 
            <li><a href="dodaj.php?kat=9">kwiaty id=9</a></li>   
                 
            <li><a href="dodaj.php?kat=11">miasta id=11</a></li>   
                 
            <li><a href="dodaj.php?kat=12">mosty id=12</a></li>   
                 
            <li><a href="dodaj.php?kat=3">natura id=3</a></li>   
                 
            <li><a href="dodaj.php?kat=13">ogień id=13</a></li>   
                 
            <li><a href="dodaj.php?kat=14">owoce id=14</a></li>   
                 
            <li><a href="dodaj.php?kat=15">panoramy id=15</a></li>   
                 
            <li><a href="dodaj.php?kat=16">pojazdy id=16</a></li>   
                 
            <li><a href="dodaj.php?kat=21">spa id=21</a></li>   
                 
            <li><a href="dodaj.php?kat=17">sport id=17</a></li>   
                 
            <li><a href="dodaj.php?kat=18">uliczki id=18</a></li>   
                 
            <li><a href="dodaj.php?kat=20">zwierzęta id=20</a></li>   
                </ul>
        </div>
		
        <div class="col-lg-10 text-center">		
            <h5>Obrazy w kategorii: grafiki id=1  obrazków <strong>124</strong><h5>	


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440331921061.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440331921061.jpg id=2239</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440331921061.jpg" alt="">
				<div class="caption">_137440331921061.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440335529087.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440335529087.jpg id=2240</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440335529087.jpg" alt="">
				<div class="caption">_137440335529087.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374403393143.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374403393143.jpg id=2241</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374403393143.jpg" alt="">
				<div class="caption">_1374403393143.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744034422935.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744034422935.jpg id=2242</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744034422935.jpg" alt="">
				<div class="caption">_13744034422935.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440349626747.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440349626747.jpg id=2243</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440349626747.jpg" alt="">
				<div class="caption">_137440349626747.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440352028334.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440352028334.jpg id=2244</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440352028334.jpg" alt="">
				<div class="caption">_137440352028334.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744035476045.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744035476045.jpg id=2245</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744035476045.jpg" alt="">
				<div class="caption">_13744035476045.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440355314307.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440355314307.jpg id=2246</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440355314307.jpg" alt="">
				<div class="caption">_137440355314307.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744035908717.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744035908717.jpg id=2247</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744035908717.jpg" alt="">
				<div class="caption">_13744035908717.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744038773923.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744038773923.jpg id=2248</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744038773923.jpg" alt="">
				<div class="caption">_13744038773923.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374403879144.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374403879144.jpg id=2249</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374403879144.jpg" alt="">
				<div class="caption">_1374403879144.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440391411712.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440391411712.jpg id=2250</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440391411712.jpg" alt="">
				<div class="caption">_137440391411712.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744039391668.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744039391668.jpg id=2251</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744039391668.jpg" alt="">
				<div class="caption">_13744039391668.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440403810022.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440403810022.jpg id=2252</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440403810022.jpg" alt="">
				<div class="caption">_137440403810022.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440412218329.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440412218329.jpg id=2253</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440412218329.jpg" alt="">
				<div class="caption">_137440412218329.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744041478386.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744041478386.jpg id=2254</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744041478386.jpg" alt="">
				<div class="caption">_13744041478386.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440417828541.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440417828541.jpg id=2255</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440417828541.jpg" alt="">
				<div class="caption">_137440417828541.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440445622321.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440445622321.jpg id=2256</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440445622321.jpg" alt="">
				<div class="caption">_137440445622321.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440449122726.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440449122726.jpg id=2257</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440449122726.jpg" alt="">
				<div class="caption">_137440449122726.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440449320615.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440449320615.jpg id=2258</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440449320615.jpg" alt="">
				<div class="caption">_137440449320615.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374404548380.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374404548380.jpg id=2259</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374404548380.jpg" alt="">
				<div class="caption">_1374404548380.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440459016812.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440459016812.jpg id=2260</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440459016812.jpg" alt="">
				<div class="caption">_137440459016812.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440467813662.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440467813662.jpg id=2261</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440467813662.jpg" alt="">
				<div class="caption">_137440467813662.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440472621445.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440472621445.jpg id=2262</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440472621445.jpg" alt="">
				<div class="caption">_137440472621445.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744047671595.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744047671595.jpg id=2263</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744047671595.jpg" alt="">
				<div class="caption">_13744047671595.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744049175718.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744049175718.jpg id=2264</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744049175718.jpg" alt="">
				<div class="caption">_13744049175718.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440496516085.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440496516085.jpg id=2265</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440496516085.jpg" alt="">
				<div class="caption">_137440496516085.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744049777351.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744049777351.jpg id=2266</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744049777351.jpg" alt="">
				<div class="caption">_13744049777351.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440500130632.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440500130632.jpg id=2267</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440500130632.jpg" alt="">
				<div class="caption">_137440500130632.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744050227839.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744050227839.jpg id=2268</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744050227839.jpg" alt="">
				<div class="caption">_13744050227839.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440504912905.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440504912905.jpg id=2269</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440504912905.jpg" alt="">
				<div class="caption">_137440504912905.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744050809630.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744050809630.jpg id=2270</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744050809630.jpg" alt="">
				<div class="caption">_13744050809630.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440512824431.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440512824431.jpg id=2271</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440512824431.jpg" alt="">
				<div class="caption">_137440512824431.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744051419562.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744051419562.jpg id=2272</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744051419562.jpg" alt="">
				<div class="caption">_13744051419562.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440520128590.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440520128590.jpg id=2273</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440520128590.jpg" alt="">
				<div class="caption">_137440520128590.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440523626892.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440523626892.jpg id=2274</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440523626892.jpg" alt="">
				<div class="caption">_137440523626892.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440526231955.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440526231955.jpg id=2275</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440526231955.jpg" alt="">
				<div class="caption">_137440526231955.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440526714089.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440526714089.jpg id=2276</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440526714089.jpg" alt="">
				<div class="caption">_137440526714089.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440534826224.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440534826224.jpg id=2277</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440534826224.jpg" alt="">
				<div class="caption">_137440534826224.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440547710520.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440547710520.jpg id=2278</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440547710520.jpg" alt="">
				<div class="caption">_137440547710520.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374405495816.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374405495816.jpg id=2279</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374405495816.jpg" alt="">
				<div class="caption">_1374405495816.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440559515023.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440559515023.jpg id=2280</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440559515023.jpg" alt="">
				<div class="caption">_137440559515023.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744056198445.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744056198445.jpg id=2281</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744056198445.jpg" alt="">
				<div class="caption">_13744056198445.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440562120978.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440562120978.jpg id=2282</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440562120978.jpg" alt="">
				<div class="caption">_137440562120978.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440562320547.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440562320547.jpg id=2283</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440562320547.jpg" alt="">
				<div class="caption">_137440562320547.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440562518112.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440562518112.jpg id=2284</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440562518112.jpg" alt="">
				<div class="caption">_137440562518112.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744056306974.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744056306974.jpg id=2285</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744056306974.jpg" alt="">
				<div class="caption">_13744056306974.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440563211679.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440563211679.jpg id=2286</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440563211679.jpg" alt="">
				<div class="caption">_137440563211679.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744056491329.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744056491329.jpg id=2287</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744056491329.jpg" alt="">
				<div class="caption">_13744056491329.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440578417035.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440578417035.jpg id=2288</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440578417035.jpg" alt="">
				<div class="caption">_137440578417035.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440579032641.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440579032641.jpg id=2289</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440579032641.jpg" alt="">
				<div class="caption">_137440579032641.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440582323669.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440582323669.jpg id=2290</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440582323669.jpg" alt="">
				<div class="caption">_137440582323669.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744058321750.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744058321750.jpg id=2291</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744058321750.jpg" alt="">
				<div class="caption">_13744058321750.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440592620540.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440592620540.jpg id=2292</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440592620540.jpg" alt="">
				<div class="caption">_137440592620540.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440599412548.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440599412548.jpg id=2293</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440599412548.jpg" alt="">
				<div class="caption">_137440599412548.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440602626248.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440602626248.jpg id=2294</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440602626248.jpg" alt="">
				<div class="caption">_137440602626248.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440605723129.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440605723129.jpg id=2295</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440605723129.jpg" alt="">
				<div class="caption">_137440605723129.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440606617173.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440606617173.jpg id=2296</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440606617173.jpg" alt="">
				<div class="caption">_137440606617173.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744061016396.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744061016396.jpg id=2297</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744061016396.jpg" alt="">
				<div class="caption">_13744061016396.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744061027045.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744061027045.jpg id=2298</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744061027045.jpg" alt="">
				<div class="caption">_13744061027045.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440613131033.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440613131033.jpg id=2299</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440613131033.jpg" alt="">
				<div class="caption">_137440613131033.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440613311134.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440613311134.jpg id=2300</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440613311134.jpg" alt="">
				<div class="caption">_137440613311134.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440615117623.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440615117623.jpg id=2301</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440615117623.jpg" alt="">
				<div class="caption">_137440615117623.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440619123954.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440619123954.jpg id=2302</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440619123954.jpg" alt="">
				<div class="caption">_137440619123954.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440620731707.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440620731707.jpg id=2303</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440620731707.jpg" alt="">
				<div class="caption">_137440620731707.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744062089848.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744062089848.jpg id=2304</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744062089848.jpg" alt="">
				<div class="caption">_13744062089848.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374406243193.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374406243193.jpg id=2305</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374406243193.jpg" alt="">
				<div class="caption">_1374406243193.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374406375395.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374406375395.jpg id=2306</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374406375395.jpg" alt="">
				<div class="caption">_1374406375395.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440637712904.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440637712904.jpg id=2307</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440637712904.jpg" alt="">
				<div class="caption">_137440637712904.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440639927308.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440639927308.jpg id=2308</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440639927308.jpg" alt="">
				<div class="caption">_137440639927308.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374406401885.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374406401885.jpg id=2309</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374406401885.jpg" alt="">
				<div class="caption">_1374406401885.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440643326951.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440643326951.jpg id=2310</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440643326951.jpg" alt="">
				<div class="caption">_137440643326951.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744064892245.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744064892245.jpg id=2311</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744064892245.jpg" alt="">
				<div class="caption">_13744064892245.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744065032941.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744065032941.jpg id=2312</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744065032941.jpg" alt="">
				<div class="caption">_13744065032941.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440651631678.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440651631678.jpg id=2313</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440651631678.jpg" alt="">
				<div class="caption">_137440651631678.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440651917439.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440651917439.jpg id=2314</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440651917439.jpg" alt="">
				<div class="caption">_137440651917439.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744065407859.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744065407859.jpg id=2315</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744065407859.jpg" alt="">
				<div class="caption">_13744065407859.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440658116682.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440658116682.jpg id=2316</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440658116682.jpg" alt="">
				<div class="caption">_137440658116682.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_1374406601713.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_1374406601713.jpg id=2317</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_1374406601713.jpg" alt="">
				<div class="caption">_1374406601713.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744066158459.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744066158459.jpg id=2318</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744066158459.jpg" alt="">
				<div class="caption">_13744066158459.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440665817604.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440665817604.jpg id=2319</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440665817604.jpg" alt="">
				<div class="caption">_137440665817604.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440669116583.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440669116583.jpg id=2320</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440669116583.jpg" alt="">
				<div class="caption">_137440669116583.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440669426356.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440669426356.jpg id=2321</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440669426356.jpg" alt="">
				<div class="caption">_137440669426356.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744067242189.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744067242189.jpg id=2322</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744067242189.jpg" alt="">
				<div class="caption">_13744067242189.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744067583651.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744067583651.jpg id=2323</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744067583651.jpg" alt="">
				<div class="caption">_13744067583651.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440677425418.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440677425418.jpg id=2324</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440677425418.jpg" alt="">
				<div class="caption">_137440677425418.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440679317904.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440679317904.jpg id=2325</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440679317904.jpg" alt="">
				<div class="caption">_137440679317904.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440682327171.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440682327171.jpg id=2326</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440682327171.jpg" alt="">
				<div class="caption">_137440682327171.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744068252848.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744068252848.jpg id=2327</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744068252848.jpg" alt="">
				<div class="caption">_13744068252848.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440682711481.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440682711481.jpg id=2328</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440682711481.jpg" alt="">
				<div class="caption">_137440682711481.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440689613827.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440689613827.jpg id=2329</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440689613827.jpg" alt="">
				<div class="caption">_137440689613827.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440692325264.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440692325264.jpg id=2330</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440692325264.jpg" alt="">
				<div class="caption">_137440692325264.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440692421801.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440692421801.jpg id=2331</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440692421801.jpg" alt="">
				<div class="caption">_137440692421801.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440692528846.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440692528846.jpg id=2332</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440692528846.jpg" alt="">
				<div class="caption">_137440692528846.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440692831196.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440692831196.jpg id=2333</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440692831196.jpg" alt="">
				<div class="caption">_137440692831196.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744069306885.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744069306885.jpg id=2334</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744069306885.jpg" alt="">
				<div class="caption">_13744069306885.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440708115926.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440708115926.jpg id=2335</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440708115926.jpg" alt="">
				<div class="caption">_137440708115926.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744072041815.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744072041815.jpg id=2336</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744072041815.jpg" alt="">
				<div class="caption">_13744072041815.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440720714084.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440720714084.jpg id=2337</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440720714084.jpg" alt="">
				<div class="caption">_137440720714084.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744077133981.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744077133981.jpg id=2338</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744077133981.jpg" alt="">
				<div class="caption">_13744077133981.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440826022369.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440826022369.jpg id=2339</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440826022369.jpg" alt="">
				<div class="caption">_137440826022369.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440871616770.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440871616770.jpg id=2340</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440871616770.jpg" alt="">
				<div class="caption">_137440871616770.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744091017822.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744091017822.jpg id=2341</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744091017822.jpg" alt="">
				<div class="caption">_13744091017822.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137440956616024.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137440956616024.jpg id=2342</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137440956616024.jpg" alt="">
				<div class="caption">_137440956616024.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744100924650.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744100924650.jpg id=2343</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744100924650.jpg" alt="">
				<div class="caption">_13744100924650.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441028822614.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441028822614.jpg id=2344</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441028822614.jpg" alt="">
				<div class="caption">_137441028822614.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744107309670.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744107309670.jpg id=2345</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744107309670.jpg" alt="">
				<div class="caption">_13744107309670.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744107376535.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744107376535.jpg id=2346</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744107376535.jpg" alt="">
				<div class="caption">_13744107376535.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441100230807.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441100230807.jpg id=2347</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441100230807.jpg" alt="">
				<div class="caption">_137441100230807.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744111035789.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744111035789.jpg id=2348</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744111035789.jpg" alt="">
				<div class="caption">_13744111035789.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441110910002.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441110910002.jpg id=2349</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441110910002.jpg" alt="">
				<div class="caption">_137441110910002.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441113715116.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441113715116.jpg id=2350</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441113715116.jpg" alt="">
				<div class="caption">_137441113715116.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441171924315.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441171924315.jpg id=2351</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441171924315.jpg" alt="">
				<div class="caption">_137441171924315.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441186615807.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441186615807.jpg id=2352</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441186615807.jpg" alt="">
				<div class="caption">_137441186615807.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441200313249.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441200313249.jpg id=2353</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441200313249.jpg" alt="">
				<div class="caption">_137441200313249.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441202913298.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441202913298.jpg id=2354</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441202913298.jpg" alt="">
				<div class="caption">_137441202913298.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744121405775.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744121405775.jpg id=2355</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744121405775.jpg" alt="">
				<div class="caption">_13744121405775.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744121593243.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744121593243.jpg id=2356</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744121593243.jpg" alt="">
				<div class="caption">_13744121593243.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744127916595.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744127916595.jpg id=2357</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744127916595.jpg" alt="">
				<div class="caption">_13744127916595.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441285623217.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441285623217.jpg id=2358</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441285623217.jpg" alt="">
				<div class="caption">_137441285623217.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441286115254.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441286115254.jpg id=2359</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441286115254.jpg" alt="">
				<div class="caption">_137441286115254.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441305012930.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441305012930.jpg id=2360</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441305012930.jpg" alt="">
				<div class="caption">_137441305012930.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_13744131197572.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_13744131197572.jpg id=2361</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_13744131197572.jpg" alt="">
				<div class="caption">_13744131197572.jpg</div>
			</div>
		</div>


		<div class="thumbnail-item thumbnail"  style="width: 23%; float: left;">
			<a href="#"><img src="../galeria/abstrakcje/_137441315329407.jpg" class="thumbnail" width="110px" alt=""></a>
		<div class="caption">_137441315329407.jpg id=2362</div> 
			<div class="tooltip_a">
				<img src="../galeria/abstrakcje/_137441315329407.jpg" alt="">
				<div class="caption">_137441315329407.jpg</div>
			</div>
		</div>

			
</div>
</div>
</div>







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
</html>
<?php }} ?>