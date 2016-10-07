<?php
/*
Recipes - the list of raw materials that go into the creation of one product for sale or one service offered. With sample values in brackets ... a recipe code (Legendary Burger), a description (single patty, original burger), and the recipe ingredients (1 patty, 1 bun, 2 oz triple-O sauce, 1 pickle).
*/
class Recipes_Model extends CI_Model
{
	var $data = array(
		array(	
			'id' => '1', 
			'name' => 'Big Mac',
			'description' => 'One of a kind, legendary Big Mac, made with two 100% Canadian beef patties, special sauce, crisp lettuce, processed cheddar cheese, pickles and onions on a toasted sesame seed bun. Nothing compares to the taste.',
			'ingredients' => 'Big Mac Bun, 100% Beef Patty, Shredded Lettuce, Big Mac Sauce, Pasteurized Process American Cheese, Pickle Slices'),
		array(
			'id' => '2', 
			'name' => 'Double Big Mac',
			'description' => 'One of a kind, Double Big Mac, made with four 100% Canadian beef patties, special sauce, crisp lettuce, processed cheddar cheese, pickles and onions on a toasted sesame seed bun. Nothing compares to the taste.',
			'ingredients' => 'Big Mac Bun, 100% Beef Patty, Shredded Lettuce, Big Mac Sauce, Pasteurized Process American Cheese, Pickle Slices'),
		array(
			'id' => '3', 
			'name' => 'Cheeseburger',
			'description' => 'A slice of melted processed cheddar cheese on a juicy, 100% pure Canadian beef patty with tangy pickles and onions, ketchup and mustard on a freshly-toasted bun.',
			'ingredients' => 'McDonald\'s Bun, Mustard, Ketchup, Onions, One slice of pickle, One slice of cheese, One beef patty'),
		array(
			'id' => '4', 
			'name' => 'Filet-O-Fish',
			'description' => 'Fresh from the deep, cold waters of Alaska’s Bering Sea, this light filet of Alaska Pollock is all yours. Pure temptation on a lightly steamed bun, topped with processed cheddar cheese and tangy tartar sauce.',
			'ingredients' => 'McDonald\'s Bun, Fish Portion, Tartar Sauce, Pasteurized Process American Cheese'),
		array(
			'id' => '5', 
			'name' => 'Fries',
			'description' => 'McDonald’s World Famous Fries are always a delicious choice. Served perfectly golden, our fries promise a one-of-a-kind taste because they’re made from the finest potatoes from Canadian farms. Mmmm… of course you want fries with that!',
			'ingredients' => 'Potatoes, Canola Oil, Soybean Oil, Hydrogenated Soybean Oil, Natural Beef Flavour, Hydrolyzed wheat, Hydrolized milk, Citric acid, Dimethylpolysiloxane, Dextrose'),
		array(
			'id' => '6', 
			'name' => 'Soft Drink',
			'description' => 'A cold and refreshing companion to any meal on our menu.',
			'ingredients' => 'N/A')
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