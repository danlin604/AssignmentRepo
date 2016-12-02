<?php

/*
The sales page should show a menu of purchaseable items, with description & price for each. The goal of this page is to build an order with multiple items, and to log the transaction that would result if the sale proceeded for real.
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class sales_controller extends Application
{

	public function index()
	{
		foreach($this->stock->all() as $item)
		{
			$cells[] = $this->parser->parse('_sales_cell', (array) $item, true);
		}

		$this->load->library('table');

		$params = array
		(
			'table_open' => '<table class="menu_table">',
			'cell_start' => '<td class="menu_item">',
			'cell_alt_start' => '<td class="menu_item">',
		);
		$this->table->set_template($params);

		$rows = $this->table->make_columns($cells, 3);
		$this->data['sales_table'] = $this->table->generate($rows);

		$this->data['pagebody'] = 'sales_view';
		$this->render(); 
	}


	public function get($which)
	{
		//view we want to show
		$this->data['pagebody'] = 'sales_detail_view';

		//build our list of item records for the view
		$result = ' ';
		$source = $this->stock->get($which);
		$result = $this->parser->parse('sales_items', $source, true);
		$this->data['items'] = $result;
				
		$this->render(); 
	}
}
