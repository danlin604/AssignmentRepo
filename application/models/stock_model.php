<?php
/*
Stock - the assembled goods or services ready to sell. Again with sample values ... a recipe code (Legendary Burger), a description (single patty, original burger), a selling price ($5.49), quantity on hand if pre-made.
*/

class Stock_Model extends CI_Model
{
	var $data = array(
		array
		(	'id' => '1', 
			'name' => 'Big Mac',
			'description' => 'One of a kind, legendary Big Mac, made with two 100% Canadian beef patties, special sauce, crisp lettuce, processed cheddar cheese, pickles and onions on a toasted sesame seed bun. Nothing compares to the taste.',
			'price' => '5.99',

		),
		array
		(
			'id' => '2', 
			'name' => 'Double Big Mac',
			'description' => 'One of a kind, Double Big Mac, made with four 100% Canadian beef patties, special sauce, crisp lettuce, processed cheddar cheese, pickles and onions on a toasted sesame seed bun. Nothing compares to the taste.',
			'price' => '8.99'
		),
		array
		(
			'id' => '3', 
			'name' => 'Cheeseburger',
			'description' => 'A slice of melted processed cheddar cheese on a juicy, 100% pure Canadian beef patty with tangy pickles and onions, ketchup and mustard on a freshly-toasted bun.',
			'price' => '3.99'
		),
		array
		(
			'id' => '4', 
			'name' => 'Filet-O-Fish',
			'description' => 'Fresh from the deep, cold waters of Alaska’s Bering Sea, this light filet of Alaska Pollock is all yours. Pure temptation on a lightly steamed bun, topped with processed cheddar cheese and tangy tartar sauce.',
			'price' => '4.99'
		),
		array
		(
			'id' => '5', 
			'name' => 'Fries',
			'description' => 'McDonald’s World Famous Fries are always a delicious choice. Served perfectly golden, our fries promise a one-of-a-kind taste because they’re made from the finest potatoes from Canadian farms. Mmmm… of course you want fries with that!',
			'price' => '4.60'
		),
		array
		(
			'id' => '6', 
			'name' => 'Soft Drink',
			'description' => 'A cold and refreshing companion to any meal on our menu.',
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