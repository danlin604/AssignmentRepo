<?php
/*
The homepage should be a dashboard of sorts, showing some summary information: $ spent purchasing inventory, $ received from sales, cost of sales ingredients consumed. These are derived from the transaction logs.
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_Controller extends Application
{

	public function index()
	{
		//should get from transaction log and use logic to math results
		$items = $this->stock_model->all();

		foreach($items as $item)
		{
			$cells[] = $this->parser->parse('_homepage_cell', (array) $item, true);
		}

		$this->load->library('table');

		$params = array
		(
			'table_open' => '<table class="menu_table">',
			'cell_start' => '<td class="menu_item">',
			'cell_alt_start' => '<td class="menu_item">',
		);
		$this->table->set_template($params);

		$rows = $this->table->make_columns($cells, 1);
		$this->data['homepage_table'] = $this->table->generate($rows);

		$this->data['pagebody'] = 'homepage_view';
		$this->render(); 
	}
}
