<?php /* Smarty version Smarty-3.1.13, created on 
         compiled from "./templates/zamowienia.tpl" */ ?>
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
  ),
  'nocache_hash' => '183840934956601114dcc744-16421571',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_56601114e5fad5_18063150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56601114e5fad5_18063150')) {function content_56601114e5fad5_18063150($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/fanti/allegro.kamedia.pl/a/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

normalne
<div class="container">
	<div class="row">	
        <div class="col-lg-2 text-left">
       <ul> Lista - <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->login;?>

       <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>         
         
         <li><a href="zamowienia.php?id=<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value->id_obrazu;?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zamowienie']->value->time,"%Y-%m-%d");?>
<br></a></li>
        <?php } ?>
        </ul>
        </div>
		
        <div class="col-lg-10 text-center">		
			<h4>ilość zamówień <?php echo $_smarty_tpl->tpl_vars['id_ostatnie_zam']->value;?>
</h4>
<a href="zamowienia.php?id=<?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->id-1;?>
"><< prev</a> <a href="zamowienia.php?id=<?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->id+1;?>
"> next>></a>              
                        
 <form class="form form-control" action="zamowienia.php" method="get" style="height: 60px; border: 0px solid black; box-shadow: 0 0 0;">
		<input type="text" name="id" class="input">
		<button type="submit" class="btn btn-primary btn-info ">zobacz zamówienie</button>
		<input type="hidden" id="x1" name="kadr" value="<?php echo $_smarty_tpl->tpl_vars['kadr']->value[0];?>
">
		<input type="hidden" id="y1" name="kadr" value="<?php echo $_smarty_tpl->tpl_vars['kadr']->value[1];?>
">
		<input type="hidden" id="x2" name="kadr" value="<?php echo $_smarty_tpl->tpl_vars['kadr']->value[2];?>
">
		<input type="hidden" id="y2" name="kadr" value="<?php echo $_smarty_tpl->tpl_vars['kadr']->value[3];?>
"> 
             	</form>
		
			<div class="col-lg-7">
			<div class="thumbnail"  style="width: 100%; float: left;">
			<a href="#"><img src="../galeria/<?php echo $_smarty_tpl->tpl_vars['obraz']->value->katalog;?>
/<?php echo $_smarty_tpl->tpl_vars['obraz']->value->plik;?>
" class="" alt="" id="photo"></a>
		<div class="caption"><?php echo $_smarty_tpl->tpl_vars['obraz']->value->plik;?>
 id=<?php echo $_smarty_tpl->tpl_vars['obraz']->value->id;?>
 szer_min<?php echo $_smarty_tpl->tpl_vars['obraz']->value->m_W;?>
 wys_min<?php echo $_smarty_tpl->tpl_vars['obraz']->value->m_H;?>
</div> 
			</div>
			<div>
				
			  id obrazu = <?php echo $_smarty_tpl->tpl_vars['obraz']->value->id;?>
 plik = <?php echo $_smarty_tpl->tpl_vars['obraz']->value->plik;?>
<br>
			  szer_orginału =<?php echo $_smarty_tpl->tpl_vars['obraz']->value->W;?>
 wys_orginału =<?php echo $_smarty_tpl->tpl_vars['obraz']->value->H;?>
<br>
			  katalog ../galeria/<?php echo $_smarty_tpl->tpl_vars['obraz']->value->katalog;?>
<br>
			  kategoria = <?php echo $_smarty_tpl->tpl_vars['obraz']->value->kategoria;?>
			
			</div>
			</div>
			<div class="col-lg-5">
			<h3>zamówienie = <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->id;?>
</h3>
                        
			<h4 class="text-danger">login <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->login;?>
</h4>
                        data  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zamowienie']->value->time,"%Y-%m-%d");?>
<br> 
			czas  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zamowienie']->value->time,"%H:%M:%S");?>
<br>
                        ip      <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->ip;?>
<br>
			email  <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->email;?>
<br>
			materiał <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->material;?>
<br>
			szerokość <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->w;?>
 cm<br>
			wysokość <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->h;?>
 cm<br>
			kadr <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->kadr;?>
<br>
			efekt <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->efekt;?>
<br>
			obraz id <?php echo $_smarty_tpl->tpl_vars['zamowienie']->value->id_obrazu;?>
<br>
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




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>