<?php
/*
Supplies - the raw materials that you might keep in a pantry . With sample values in brackets ... these will have a code of some sort (pickles), a description (Schwarz's spicy dill pickles), a receiving unit (case of 12 jars), a receiving cost ($ per unit), a stocking unit (jars of 64 pickles each), and quantities on hand. You will need to deal with partial units (eg an open jar).
*/
class Supplies_Model extends CI_Model
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