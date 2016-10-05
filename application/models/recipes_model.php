<?php
/*
Recipes - the list of raw materials that go into the creation of one product for sale or one service offered. With sample values in brackets ... a recipe code (Legendary Burger), a description (single patty, original burger), and the recipe ingredients (1 patty, 1 bun, 2 oz triple-O sauce, 1 pickle).
*/
class Recipes_Model extends CI_Model
{
	var $data = array(
		array
		(	'id' => '1', 
			'name' => '',
			'description' => '',
			'price' => ''
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