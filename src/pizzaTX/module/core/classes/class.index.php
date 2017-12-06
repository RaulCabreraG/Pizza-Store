<?php

class Index
{
	public function __construct()
	{
		global $mysqli;
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'txpizza');
		$mysqli->set_charset("utf8");
	}

	private function consultToArray($consult)
	{
		global $mysqli;

		$dataResult = $mysqli->query($consult);

		$dataArray = array();
		while ($row = $dataResult->fetch_array(MYSQLI_ASSOC)) {
			$dataArray[] = $row;
		}
		return $dataArray;
	}

	public function getPizzasInfo()
	{
		global $mysqli;

		$ingredientSql = "SELECT p.name, i.ingredientName
						FROM pizza p, ingredient i
						WHERE p.pizzaId = i.pizzaId
						ORDER BY p.name ASC;";
		$pizzaIngredients = $this->consultToArray($ingredientSql);

		$pizzaNameSql = "SELECT p.pizzaId, p.name
						FROM pizza p";
		$pizzaNames = $this->consultToArray($pizzaNameSql);

		$pizzaData["names"] = $pizzaNames;
		$pizzaData["ingredients"] = $pizzaIngredients;

		return $pizzaData;
	}

	public function getCheeses()
	{
		global $mysqli;

		$cheeseSql = "SELECT cheeseId, cheeseName
					FROM cheese
					ORDER BY cheeseName ASC";
		$cheeseArray = $this->consultToArray($cheeseSql);

		return $cheeseArray;
	}

	public function getSauces()
	{
		global $mysqli;

		$sauceSql = "SELECT sauceId, sauceName
					FROM sauce
					ORDER BY sauceName ASC";
		$cheeseArray = $this->consultToArray($sauceSql);

		return $cheeseArray;
	}

	public function getCrusts()
	{
		global $mysqli;

		$crustSql = "SELECT crustId, crustName
					FROM crust
					ORDER BY crustName ASC";
		$cheeseArray = $this->consultToArray($crustSql);

		return $cheeseArray;
	}

	public function getSizes()
	{
		global $mysqli;

		$sizeSql = "SELECT sizeName, numberOfSlices
					FROM size
					ORDER BY numberOfSlices ASC";
		$cheeseArray = $this->consultToArray($sizeSql);

		return $cheeseArray;
	}

	public function getSalads()
	{
		global $mysqli;

		$saladSql = "SELECT saladName
					FROM salad
					ORDER BY saladName ASC";
		$cheeseArray = $this->consultToArray($saladSql);

		return $cheeseArray;
	}

	public function getIngredients()
	{
		global $mysqli;

		$ingredientSql = "SELECT ingredientName
							FROM ingredient
							WHERE pizzaId = '0'
							ORDER BY ingredientName ASC";
		$ingredientArray = $this->consultToArray($ingredientSql);

		return $ingredientArray;
	}
}

?>