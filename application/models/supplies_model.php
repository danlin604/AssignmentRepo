<?php
/**
 *
 * This is our Supplies model with hard-coded data so we don't
 * have to worry about any database setup.
 *
 *
 * @author Manveer Bhangu
 */
class Supplies_Model extends CI_Model {

	var $data = array(
		array(
			'id' => '1'
			'name' => 'pickels',
			'Desc' => 'Dairy Farms Pickels',
			'receiving_unit' => 'Case of 10 jars',
			'receiving_cost' => '$50',
			'stock_unit' => 'Jars of 100 pickels',
			'quantities_on_hand' => '120 pickels'),
		array(
			'id' => '2'
			'name' => 'ketchup',
			'Desc' => 'Dairy Farms Ketchup',
			'receiving_unit' => 'Case of 15 boxes',
			'receiving_cost' => '$20',
			'stock_unit' => 'Boxes of 100 packets of ketchup',
			'quantities_on_hand' => '180 packets of ketchup'),
		array(
			'id' => '3'
			'name' => 'tomato',
			'Desc' => 'Ben\'s tomatos',
			'receiving_unit' => 'Case of 10 boxes',
			'receiving_cost' => '$40',
			'stock_unit' => 'Boxes of 250 tomato slices',
			'quantities_on_hand' => '50 tomoato slices'),
		array(
			'id' => '4'
			'name' => 'Mustard',
			'Desc' => 'Frank\'s Amazing Mustard',
			'receiving_unit' => 'Case of 10 boxes',
			'receiving_cost' => '$45',
			'stock_unit' => 'Boxes of 150 packets of mustard',
			'quantities_on_hand' => '40 packets of mustard'),
		array(
			'id' => '5'
			'name' => 'Onions',
			'Desc' => 'Dairy Farms Onions',
			'receiving_unit' => 'Bag of 80 Onions',
			'receiving_cost' => '$130',
			'stock_unit' => '80 Onions',
			'quantities_on_hand' => '20 Onions'),
		array(
			'id' => '6'
			'name' => 'buns',
			'Desc' => 'Super secret special buns',
			'receiving_unit' => 'Cases of 20 boxes',
			'receiving_cost' => '$120',
			'stock_unit' => 'Boxes of 100 buns',
			'quantities_on_hand' => '250 buns'),
		array(
			'id' => '7'
			'name' => 'meat patty',
			'Desc' => 'Bob\'s Farms Patties',
			'receiving_unit' => 'Cases of 25 boxes',
			'receiving_cost' => '$450',
			'stock_unit' => 'boxes of 90 patties',
			'quantities_on_hand' => '250 meat patties'),
		array(
			'id' => '8'
			'name' => 'Mac Sauce',
			'Desc' => 'super top secret recipe',
			'receiving_unit' => 'Cases of 10 boxes',
			'receiving_cost' => '$150',
			'stock_unit' => 'boxes of 30 packets',
			'quantities_on_hand' => '4 packets'),
		array(
			'id' => '9'
			'name' => 'fish patty',
			'Desc' => 'Bob\'s Farms Patties',
			'receiving_unit' => 'Cases of 15 boxes',
			'receiving_cost' => '$400',
			'stock_unit' => 'boxes of 110 fish patties',
			'quantities_on_hand' => '250 fish patties'),
		array(
			'id' => '10'
			'name' => 'fries',
			'Desc' => 'Bob\'s Farms Patties',
			'receiving_unit' => 'Cases of 30 boxes',
			'receiving_cost' => '$250',
			'stock_unit' => 'boxes of 500 fries',
			'quantities_on_hand' => '300 fries'),
		array(
			'id' => '11'
			'name' => 'soft drink',
			'Desc' => 'Bob\'s Farms Patties',
			'receiving_unit' => 'Cases of 40 boxes',
			'receiving_cost' => '$450',
			'stock_unit' => 'boxes of 110 bottles',
			'quantities_on_hand' => '30 bottles')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a 
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['name'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}
	
}

?>