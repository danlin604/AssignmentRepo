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
		array('id' => 'pickels',
			'Desc' => 'Dairy Farms Pickels',
			'receiving_unit' => '12 cases',
			'receiving_cost' => '$50',
			'stock_unit' => 'cases of 100',
			'quantities_on_hand' => '50 cases'),
		array('id' => 'ketchup', 
			'Desc' => 'Dairy Farms Ketchup',
			'receiving_unit' => '10 cases',
			'receiving_cost' => '$20',
			'stock_unit' => 'cases of 50',
			'quantities_on_hand' => '70 cases'),
		array('id' => 'tomato',
			'Desc' => 'Ben\'s tomatos',
			'receiving_unit' => '5 cases',
			'receiving_cost' => '$40',
			'stock_unit' => 'cases of 20',
			'quantities_on_hand' => '5 cases'),
		array('id' => 'Mustard',
			'Desc' => 'Frank\'s Amazing Mustard',
			'receiving_unit' => '12 cases',
			'receiving_cost' => '$45',
			'stock_unit' => 'cases of 35',
			'quantities_on_hand' => '10 cases'),
		array('id' => 'Onions',
			'Desc' => 'Dairy Farms Onions',
			'receiving_unit' => '45 cases',
			'receiving_cost' => '$130',
			'stock_unit' => 'cases of 80',
			'quantities_on_hand' => '70 cases'),
		array('id' => 'ketchup',
			'Desc' => 'Sally\'s Amazing Ketchup',
			'receiving_unit' => '12 cases',
			'receiving_cost' => '$40',
			'stock_unit' => 'cases of 35',
			'quantities_on_hand' => '10 cases'),
		array('id' => 'buns',
			'Desc' => 'Super secret special buns',
			'receiving_unit' => '5 cases',
			'receiving_cost' => '$120',
			'stock_unit' => 'cases of 20',
			'quantities_on_hand' => '3 cases'),
		array('id' => 'patty',
			'Desc' => 'Bob\'s Farms Patties',
			'receiving_unit' => '150 cases',
			'receiving_cost' => '$450',
			'stock_unit' => 'cases of 30',
			'quantities_on_hand' => '20 cases')
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
			if ($record['id'] == $which)
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