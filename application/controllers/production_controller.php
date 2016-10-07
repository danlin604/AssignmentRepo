<?php

/*
The sales page should show a menu of purchaseable items, with description & price for each. The goal of this page is to build an order with multiple items, and to log the transaction that would result if the sale proceeded for real.
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Production_Controller extends Application
{

	public function index()
	{

		$this->data['pagebody'] = 'production_view';

		$source = $this->recipes_model->all();
		$items = array();
		foreach($source as $record)
		{
			$items[] = array ('name' => $record['name'], 'description' => $record['description'], 'ingredients' => $record['ingredients']);
		}

		$this->data['items'] = $items;

		$this->render(); 
	}
}
