<?php
/*
Stock - the assembled goods or services ready to sell. Again with sample values ... a recipe code (Legendary Burger), a description (single patty, original burger), a selling price ($5.49), quantity on hand if pre-made.
*/

class Stock_Model extends CI_Model
{
	var $data = array(
		array
		(	'id' => '1', 
			'name' => 'Burger',
			'description' => 'Single paddy',
			'price' => '5.00',

		),
		array
		(
			'id' => '2', 
			'name' => 'Fries',
			'description' => 'Freedom fries',
			'price' => '3.50'
		),
		array
		(
			'id' => '3', 
			'name' => 'Salad',
			'description' => 'Lawn grass',
			'price' => '4.60'
		)	
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
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