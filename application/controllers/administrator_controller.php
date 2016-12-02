<?php

/*
 * The admin page will be able to edit all data tables.
 * this means we will have to send 3 groups of data from
 * all 3 models. No idea how to do that, they will be represented using HTML tables
 * and have edit and delete buttons beside each row to make changes. Not sure if these
 * changes are too be applied to the model but that makes sense. Also an add function
 * to add to the tables. 
 * @author Manveer Bhangu
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class administrator_controller extends Application
{

	public function index()
	{
                $userrole = $this->session->userdata('userrole');
                if ($userrole != 'admin') {
                    $message = 'You are not authorized to access this page. Go away';
                    $this->data['content'] = $message;
                }
                //$message = 'Get ready to fix stuff.';
                //$this->data['pagebody' ] ='mtce';
                //$this->data['items'] = $this->menu->all();
                //$this->render();
		
                //view we want to show
		$this->data['pagebody'] = 'admin_view';

		// gets the contents from the 3 models
		$supplies_source = $this->supplies_model->all();
		$recipes_source = $this->recipes_model->all();
		$stock_source = $this->stock_model->all();
		
		// arrays to hold the contents of the models
		$supplies = array();
		$recipes = array();
		$stock = array();
		
		// go through the sources and store the data in there respective arrays
		foreach ($supplies_source as $record)
		{
			$supplies[] = array ('id' => $record['id'], 'name' => $record['name'], 'Desc' => $record['Desc'], 'receiving_unit' => $record['receiving_unit'], 'receiving_cost' => $record['receiving_cost'], 'stock_unit' => $record['stock_unit'], 'quantities_on_hand' => $record['quantities_on_hand']);
		}
		
		$this->data['supplies'] = $supplies;

		
		foreach ($recipes_source as $record)
		{
			$recipes[] = array ('id' => $record['id'], 'name' => $record['name'], 'description' => $record['description'], 'pickel' => $record['pickel'], 'ketchup' => $record['ketchup'], 'tomato' => $record['tomato'], 'mustard' => $record['mustard'], 'onions' => $record['onions'], 'buns' => $record['buns'], 'meat patty' => $record['meat patty'], 'mac sauce' => $record['mac sauce'], 'fish patty' => $record['fish patty'], 'fries' => $record['fries'], 'soft drink' => $record['soft drink']);
		}
		
		$this->data['recipes'] = $recipes;

		
		foreach ($stock_source as $record)
		{
			$stock[] = array ('id' => $record['id'], 'name' => $record['name'], 'description' => $record['description'], 'price' => $record['price'], 'currAvail' => $record['currAvail']);
		}
		
		$this->data['stock'] = $stock;

		$this->render();
		//$this->data = array_merge($this->data, $items);

	}
}
