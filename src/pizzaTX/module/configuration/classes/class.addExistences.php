<?php
class AddExistences
{
	public function __construct()
	{
		global $mysqli;
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'txpizza');
		$mysqli->set_charset("utf8");
	}

	public function getPizzas()
	{
		global $mysqli;

		$sql = "SELECT * FROM pizza";
		$result = $mysqli->query($sql);
		$allPizzas = array();
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$allPizzas[] = $row;
		}

		for ($i = 0; $i < count($allPizzas); $i++) { 
			$sqlIngredient = "SELECT ingredientName FROM ingredient WHERE pizzaId = '" . $allPizzas[$i]["pizzaId"] . "';";
			$resultIngredients = $mysqli->query($sqlIngredient);
			$allIngredients = array();
			while ($row = $resultIngredients->fetch_array(MYSQLI_ASSOC)) {
				$allIngredients[] = $row["ingredientName"];
			}
			$allPizzas[$i]["ingredients"] = implode("<br>", $allIngredients);
		}

		return $allPizzas;
	}

	public function getIngredients()
	{
		global $mysqli;

		$sql = "SELECT ingredientName FROM ingredient WHERE pizzaId = '0'";
		$result = $mysqli->query($sql);
		$allIngredients = array();
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$allIngredients[] = $row;
		}
		return $allIngredients;
	}

	public function addPizza($name, $ingredients)
	{
		global $mysqli;

		$ingredientsArray = explode(",", $ingredients);
		$sqlInsert = "INSERT INTO pizza (name) VALUES('". $name . "');";
		$mysqli->query($sqlInsert);

		$sqlGetId = "SELECT pizzaId FROM pizza WHERE name = '" . $name . "';";
		$result = $mysqli->query($sqlGetId);
		$idArray = $result->fetch_array(MYSQLI_ASSOC);
		$pizzaId = $idArray["pizzaId"];
		
		foreach ($ingredientsArray as $value) {
			$sqlInsertIngredient = "UPDATE ingredient SET pizzaId = '" . $pizzaId . "' WHERE ingredientName = '" . $value . "';";
			$mysqli->query($sqlInsertIngredient);
		}
	}

	public function addIngredient($name)
	{
		global $mysqli;

		$sqlAddIngredient = "INSERT INTO ingredient (ingredientName) VALUES ('" . $name . "');";
		$mysqli->query($sqlAddIngredient);
	}
}
?>