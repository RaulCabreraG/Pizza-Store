<script >
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

</script>
<html>
<head>
	<meta charset="utf-8">
	<title>TX - Pizza</title>
	<script src="../../libs/tether/dist/js/tether.min.js"></script>
	<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
	<script src="../../libs/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../libs/sweetAlert2/dist/sweetalert2.all.min.js"></script>
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
					{section name=i loop=$pizzas}
						<tr>
							<td>
								{$pizzas[i].name}
							</td>
							<td>
								{$pizzas[i].ingredients}
							</td>
						</tr>
					{/section}
				</table><br>
				<br>
				<legend style="color: white;">Agregar Pizza</legend>
				<br>
				<input type="text" id="pizzaName" name="pizzaName" placeholder="Nombre de la pizza"><br><br>
				<legend style="color: white;">Ingredientes de la pizza</legend><br>
				{section name=i loop=$ingredients}
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="check" id="{$ingredients[i].ingredientName}" onchange="setIngredient('{$ingredients[i].ingredientName}')">
							{$ingredients[i].ingredientName}
						</label>
					</div>
				{/section}
				<button class="btn btn-success" onclick="savePizza()">Agregar Pizza</button>
			</div>
			<div class="col-md-6" style="text-align: center;">
				<label style="color: white;">Ingredientes</label>
				<table class="table table-striped" style="color: white;">
					<tr>
						<th><center>Ingredientes</center></th>
					</tr>
					{section name=i loop=$ingredients}
						<tr>
							<td>
								{$ingredients[i].ingredientName}
							</td>
						</tr>
					{/section}
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
</html>