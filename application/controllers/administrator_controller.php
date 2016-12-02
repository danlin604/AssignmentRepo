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
		//$supplies_source = $this->supplies_model->all();
		//$recipes_source = $this->recipes_model->all();
		//$stock_source = $this->stock_model->all();
		
		// arrays to hold the contents of the models
		//$supplies = array();
		//$recipes = array();
		//$stock = array();
		
		// go through the sources and store the data in there respective arrays
		$result_supplies = ' ';
		foreach ($this->supplies->all() as $record)
		{
			$result_supplies .= $this->parser->parse('supplies_admin', $record, true);
		}
		$this->data['supplies'] = $result_supplies;


		$result_recipes = ' ';
		foreach ($this->recipes->all() as $record)
		{
			$result_recipes .= $this->parser->parse('recipes_admin', $record, true);
		}
		$this->data['recipes'] = $result_recipes;


		$result_stock = ' ';
		foreach ($this->stock->all() as $record)
		{
			$result_stock .= $this->parser->parse('stock-admin', $record, true); 
		}
		$this->data['stock'] = $result_stock;

		$this->render();
		//$this->data = array_merge($this->data, $items);

	}
}
