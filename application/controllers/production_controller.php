<?php

/*
The sales page should show a menu of purchaseable items, with description & price for each. The goal of this page is to build an order with multiple items, and to log the transaction that would result if the sale proceeded for real.
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class production_controller extends Application
{

	public function index()
	{

		$this->data['pagebody'] = 'production_view';

		$source = $this->recipes_model->all();
		$items = array();
		foreach($source as $source)
		{
			$items[] = array (	'id' => $source['id'],
								'name' => $source['name'], 
								'description' => $source['description'], 
								'pickel' => $source['pickel'],
								'ketchup' => $source['ketchup'],
								'tomato' => $source['tomato'],
								'mustard' => $source['mustard'],
								'onions' => $source['onions'],
								'buns' => $source['buns'],
								'meat patty' => $source['meat patty'],
								'mac sauce' => $source['mac sauce'],
								'fish patty' => $source['fish patty'],
								'fries' => $source['fries'],
								'soft drink' => $source['soft drink']
							);
		}

		$this->data['items'] = $items;

		$this->render(); 
	}

	public function get($which)
	{
		//view we want to show
		$this->data['pagebody'] = 'production_detail_view';

		//build our list of item records for the view
		$source = $this->recipes_model->get($which);
		$items[] = array (		'id' => $source['id'],
								'name' => $source['name'], 
								'description' => $source['description'], 
								'pickel' => $source['pickel'],
								'ketchup' => $source['ketchup'],
								'tomato' => $source['tomato'],
								'mustard' => $source['mustard'],
								'onions' => $source['onions'],
								'buns' => $source['buns'],
								'meat patty' => $source['meat patty'],
								'mac sauce' => $source['mac sauce'],
								'fish patty' => $source['fish patty'],
								'fries' => $source['fries'],
								'soft drink' => $source['soft drink']
						);

		$this->data['items'] = $items;
				
		$this->render(); 
	}
}
