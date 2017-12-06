<?php
/* Smarty version 3.1.30, created on 2017-12-06 22:10:56
  from "C:\xampp\htdocs\pizzaTX\templates\module\configuration\addExistences.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a285ce0dc6544_16066893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c60a770fa581776c425c3ec965073f926152fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizzaTX\\templates\\module\\configuration\\addExistences.tpl',
      1 => 1512594444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a285ce0dc6544_16066893 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 >
	var ingredientes = [];

	function setIngredient(ingredient)
	{
		ingredientes.push(ingredient);
	}

	function savePizza()
	{
		var selectedIngredients = [];
		for (var i = 0; i < ingredientes.length; i++) {
			if (document.getElementById(ingredientes[i]).checked) {
				selectedIngredients.push(ingredientes[i]);
			}
		}
		console.log(selectedIngredients);
		
  		pizzaName = $("#pizzaName").val();
  		
  		if (selectedIngredients.length == 0 || pizzaName == "") {
  			swal(
			  	'Error',
			  	'Debe ingresar un nombre y seleccionar ingredientes para guardar una pizza.',
			  	'error'
			);
  		} else {
  			$.ajax({
	        	type: 'post',
	        	url: 'addExistences.php',
	        	data: {
	            	accion: "addPizza",
	            	name: pizzaName,
	            	ingredients: selectedIngredients.join(",")
	        	},
	        	success: function(data)
	        	{
	        		location.reload();
	        	}
	    	});
  		}
	}

	function saveIngredient()
	{
		ingredientName = $("#ingredientName").val();
		if (ingredientName == "") {
			swal(
			  	'Error',
			  	'Debe ingresar un nombre para guardar un ingrediente.',
			  	'error'
			);
		} else {
			$.ajax({
	        	type: 'post',
	        	url: 'addExistences.php',
	        	data: {
	            	accion: "addIngredient",
	            	name: ingredientName
	        	},
	        	success: function(data)
	        	{
	        		location.reload();
	        	}
	    	});
		}
	}

<?php echo '</script'; ?>
>
<html>
<head>
	<meta charset="utf-8">
	<title>TX - Pizza</title>
	<?php echo '<script'; ?>
 src="../../libs/tether/dist/js/tether.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 src="../../libs/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../libs/sweetAlert2/dist/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
</head>
</head>
<body style="background-color: black;">
	<div class="container" width="100%">
		<div class="row" style="height:5%;">
		</div>
		<div class="row" width="100%">
			<div class="col-md-6" style="text-align: center;">
				<label style="color: white;">Tipos de pizza</label><br>
				<table class="table table-striped" style="color: white;">
					<tr>
						<th><center>Pizza</center></th>
						<th><center>Ingredientes</center></th>
					</tr>
					<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pizzas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['pizzas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['pizzas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ingredients'];?>

							</td>
						</tr>
					<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
				</table><br>
				<br>
				<legend style="color: white;">Agregar Pizza</legend>
				<br>
				<input type="text" id="pizzaName" name="pizzaName" placeholder="Nombre de la pizza"><br><br>
				<legend style="color: white;">Ingredientes de la pizza</legend><br>
				<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ingredients']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="check" id="<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ingredientName'];?>
" onchange="setIngredient('<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ingredientName'];?>
')">
							<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ingredientName'];?>

						</label>
					</div>
				<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
				<button class="btn btn-success" onclick="savePizza()">Agregar Pizza</button>
			</div>
			<div class="col-md-6" style="text-align: center;">
				<label style="color: white;">Ingredientes</label>
				<table class="table table-striped" style="color: white;">
					<tr>
						<th><center>Ingredientes</center></th>
					</tr>
					<?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ingredients']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['ingredients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ingredientName'];?>

							</td>
						</tr>
					<?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
				</table>
				<br>
				<legend style="color: white;">Agregar Ingredientes</legend>
				<br>
				<input type="text" id="ingredientName" name="ingredientName" placeholder="Nombre del  Ingrediente"><br><br>
				<button class="btn btn-success" onclick="saveIngredient()">Agregar Ingrediente</button>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
