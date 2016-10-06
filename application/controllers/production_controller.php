<?php

/*
The sales page should show a menu of purchaseable items, with description & price for each. The goal of this page is to build an order with multiple items, and to log the transaction that would result if the sale proceeded for real.
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Production_Controller extends Application
{

	public function index()
	{
		$items = $this->recipes_model->all();

		foreach($items as $item)
		{
			$cells[] = $this->parser->parse('_production_cell', (array) $item, true);
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
		$this->data['production_table'] = $this->table->generate($rows);

		$this->data['pagebody'] = 'production_view';
		$this->render(); 
	}
}
