<script >

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

</script>
<html>
<head>
	<meta charset="utf-8">
	<title>TX - PIZZA</title>
	<script src="./libs/tether/dist/js/tether.min.js"></script>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
	<script src="./libs/jquery/jquery-3.2.1.min.js"></script>
	<script src="./libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="./libs/sweetAlert2/dist/sweetalert2.all.min.js"></script>
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
												{section name=i loop=$salads}
													<option value="{$data.names[i].name}">{$salads[i].saladName}</option>
												{/section}
											</select><br>
										</div>
										<div id="pizzaOptions">
											<label for="pizzaTypes" style="color: white;">Tipo de pizza:</label>
											<select class="form-control" id="pizzaTypes" name="pizzaTypes">
												{section name=i loop=$data.names}
													<option value="{$data.names[i].pizzaId}">{$data.names[i].name}</option>
												{/section}
											</select><br>
											<label for="cheeseType" style="color: white;">Tipo de queso:</label>
											<select class="form-control" id="cheeseType" name="cheeseType">
												{section name=i loop=$cheeses}
													<option value="{$cheeses[i].cheeseId}">{$cheeses[i].cheeseName}</option>
												{/section}
											</select><br>
											<label for="sauceType" style="color: white;">Tipo de salsa:</label>
											<select class="form-control" id="sauceType" name="sauceType">
												{section name=i loop=$sauces}
													<option value="{$sauces[i].cheeseId}">{$sauces[i].sauceName}</option>
												{/section}
											</select><br>
											<label for="crustType" style="color: white;">Tipo de corteza:</label>
											<select class="form-control" id="crustType" name="crustType">
												{section name=i loop=$crusts}
													<option value="{$crusts[i].cheeseId}">{$crusts[i].crustName}</option>
												{/section}
											</select><br>
											<label for="size" style="color: white;">Tamaño:</label>
											<select class="form-control" id="size" name="size">
												{section name=i loop=$sizes}
													<option value="{$crusts[i].cheeseId}">{$sizes[i].sizeName} - {$sizes[i].numberOfSlices} porciones</option>
												{/section}
											</select><br>
											<label for="size" style="color: white;">N&uacute;mero de porciones opcional:</label>
											<input type="number" class="form-control" min="1" max="24" placeholder="N&uacute;mero de porciones"><br><br>
											<label for="ingredients" style="color: white;">Ingredientes opcionales:</label>
											{section name=i loop=$ingredients}
												<div class="form-check">
    												<label class="form-check-label">
      													<input type="checkbox" class="form-check-input" id="check{$ingredients[i].pizzaId}" name="check{$ingredients[i].pizzaId}">
      													{$ingredients[i].ingredientName}
    												</label>
  												</div>
											{/section}
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
</html>