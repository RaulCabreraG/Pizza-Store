<?php
/* Smarty version 3.1.30, created on 2017-12-06 22:10:49
  from "C:\xampp\htdocs\pizzaTX\templates\core\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a285cd93884a2_12053347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79741e0f0ebe6baa6d70e2416b5183b1b6d1c072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaTX\\templates\\core\\index.tpl',
      1 => 1512594524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a285cd93884a2_12053347 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 >

	function visualize()
	{
		if ($("#dish").val() == "pizza") {
			$("#pizzaOptions").show();
			$("#saladOptions").hide();
		} else if ($("#dish").val() != "salads") {
			$("#pizzaOptions").hide();
		} else {
			$("#pizzaOptions").hide();
			$("#saladOptions").show();
		}
	}

<?php echo '</script'; ?>
>
<html>
<head>
	<meta charset="utf-8">
	<title>TX - PIZZA</title>
	<?php echo '<script'; ?>
 src="./libs/tether/dist/js/tether.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 src="./libs/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./libs/sweetAlert2/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
</head>
</head>
<body style="background-color: black;">
	<div class="container">
		<div class="row" style="height:5%;">
		</div>
		<div class="row">
			<table width="100%" align="center">
				<tr>
					<td width="100%">
						<form method="post" accept-charset="utf-8" id="orderForm" name="orderForm" onsubmit="return order();">
							<table align="center" width="80%">
								<tr>
									<td colspan="3" align="center">
										<legend style="color: white; font-size: 30px;">
										TX - Pizza. Recepci&oacute;n de pedidos</legend><br>
									</td>
								</tr>
								<tr>
									<td style="width: 40%;" rowspan="2">
										<img src="./templates/images/pizza.jpg" width="100%">
									</td>
									<td style="width: 5%">
									</td>
									<td>
										<label for="dish" style="color: white;">Plato:</label>
										<select class="form-control" id="dish" name="dish" onchange="visualize();">
											<option value="pizza">Pizza</option>
											<option value="spaghetti">Spaghetti</option>
											<option value="lasagna">Lasagna</option>
											<option value="salads">Salads</option>
										</select><br>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div id="saladOptions" style="display: none;">
											<label for="salads" style="color: white;">Ensalada:</label>
											<select class="form-control" id="salads" name="salads">
												<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['salads']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['names'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['salads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['saladName'];?>
</option>
												<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
											</select><br>
										</div>
										<div id="pizzaOptions">
											<label for="pizzaTypes" style="color: white;">Tipo de pizza:</label>
											<select class="form-control" id="pizzaTypes" name="pizzaTypes">
												<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value['names']) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['names'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pizzaId'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['names'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
												<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
											</select><br>
											<label for="cheeseType" style="color: white;">Tipo de queso:</label>
											<select class="form-control" id="cheeseType" name="cheeseType">
												<?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cheeses']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['cheeses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cheeseId'];?>
"><?php echo $_smarty_tpl->tpl_vars['cheeses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cheeseName'];?>
</option>
												<?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
											</select><br>
											<label for="sauceType" style="color: white;">Tipo de salsa:</label>
											<select class="form-control" id="sauceType" name="sauceType">
												<?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sauces']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['sauces']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cheeseId'];?>
"><?php echo $_smarty_tpl->tpl_vars['sauces']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sauceName'];?>
</option>
												<?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>
											</select><br>
											<label for="crustType" style="color: white;">Tipo de corteza:</label>
											<select class="form-control" id="crustType" name="crustType">
												<?php
$__section_i_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['crusts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total != 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['crusts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cheeseId'];?>
"><?php echo $_smarty_tpl->tpl_vars['crusts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['crustName'];?>
</option>
												<?php
}
}
if ($__section_i_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_4_saved;
}
?>
											</select><br>
											<label for="size" style="color: white;">Tamaño:</label>
											<select class="form-control" id="size" name="size">
												<?php
$__section_i_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sizes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total != 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['crusts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cheeseId'];?>
"><?php echo $_smarty_tpl->tpl_vars['sizes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sizeName'];?>
 - <?php echo $_smarty_tpl->tpl_vars['sizes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['numberOfSlices'];?>
 porciones</option>
												<?php
}
}
if ($__section_i_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_5_saved;
}
?>
											</select><br>
											<label for="size" style="color: white;">N&uacute;mero de porciones opcional:</label>
											<input type="number" class="form-control" min="1" max="24" placeholder="N&uacute;mero de porciones"><br><br>
											<label for="ingredients" style="color: white;">Ingredientes opcionales:</label>
											<?php
$__section_i_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ingredients']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total != 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
												<div class="form-check">
    												<label class="form-check-label">
      													<input type="checkbox" class="form-check-input" id="check<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pizzaId'];?>
" name="check<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pizzaId'];?>
">
      													<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ingredientName'];?>

    												</label>
  												</div>
											<?php
}
}
if ($__section_i_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_6_saved;
}
?>
										</div>
									</td>
								</tr>
								<tr>
									<td align="center" colspan="3">
										<button class="btn btn-info">Ordenar</button>
									</td>
								</tr>
							</table>
						</form>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html><?php }
}
